function ShowPassword(){
    var x = document.getElementById("myinput");
    var y = document.getElementById("hide1");
    var z = document.getElementById("hide2");
    if(x.type=='password'){
        x.type="text";
        y.style.display="block";
        z.style.display="none";
    }else{
        x.type="password";
        z.style.display="block";
        y.style.display="none";
    }
}

function MultiSelectTag (el, customs = {shadow: false, rounded:true}) {
    var element = null
    var options = null
    var customSelectContainer = null
    var wrapper = null
    var btnContainer = null
    var body = null
    var inputContainer = null
    var inputBody = null
    var input = null
    var button = null
    var drawer = null
    var ul = null
    var domParser = new DOMParser()
    init()
  
    function init() {
        element = document.getElementById(el)
        createElements()
        initOptions()
        enableItemSelection()
        setValues()
  
        if (button && drawer) {
            button.addEventListener('click', () => {
                if(drawer.classList.contains('hidden')) {
                    initOptions()
                    enableItemSelection()
                    drawer.classList.remove('hidden')
                    input.focus()
                }
            })
        }
  
        input.addEventListener('keyup', (e) => {
                initOptions(e.target.value)
                enableItemSelection()
        })
  
        input.addEventListener('keydown', (e) => {
            if(e.key === 'Backspace' && !e.target.value && inputContainer.childElementCount > 1) {
                const child = body.children[inputContainer.childElementCount - 2].firstChild
                const option = options.find((op) => op.value == child.dataset.value)
                option.selected = false
                removeTag(child.dataset.value)
                setValues()
            }
        })
        
        window.addEventListener('click', (e) => {   
            if (!customSelectContainer.contains(e.target)){
                drawer.classList.add('hidden')
            }
        });
    }
  
    function createElements() {
        options = getOptions();
        element.classList.add('hidden')
        
        customSelectContainer = document.createElement('div')
        customSelectContainer.classList.add('mult-select-tag')
  
        wrapper = document.createElement('div')
        wrapper.classList.add('wrapper')
  
        body = document.createElement('div')
        body.classList.add('body')
        if(customs.shadow) body.classList.add('shadow')
        if(customs.rounded) body.classList.add('rounded')
        
        inputContainer = document.createElement('div')
        inputContainer.classList.add('input-container')
  
        input = document.createElement('input')
        input.classList.add('input')
        input.placeholder = `${customs.placeholder || 'Search...'}`
  
        inputBody = document.createElement('inputBody')
        inputBody.classList.add('input-body')
        inputBody.append(input)
  
        body.append(inputContainer)
  
        btnContainer = document.createElement('div')
        btnContainer.classList.add('btn-container')
  
        button = document.createElement('button')
        button.type = 'button'
        btnContainer.append(button)
  
        const icon = domParser.parseFromString(`<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="18 15 12 21 6 15"></polyline></svg>`, 'image/svg+xml').documentElement
        button.append(icon)
  
        body.append(btnContainer)
        wrapper.append(body)
  
        drawer = document.createElement('div');
        drawer.classList.add(...['drawer', 'hidden'])
        if(customs.shadow) drawer.classList.add('shadow')
        if(customs.rounded) drawer.classList.add('rounded')
        drawer.append(inputBody)
        ul = document.createElement('ul');
        drawer.appendChild(ul)
    
        customSelectContainer.appendChild(wrapper)
        customSelectContainer.appendChild(drawer)
  
        if (element.nextSibling) {
            element.parentNode.insertBefore(customSelectContainer, element.nextSibling)
        } else {
            element.parentNode.appendChild(customSelectContainer);
        }
    }
  
    function initOptions(val = null) {
        ul.innerHTML = ''
        for (var option of options) {
            if (option.selected) {
                !isTagSelected(option.value) && createTag(option)
            } else {
                const li = document.createElement('li')
                li.innerHTML = option.label
                li.dataset.value = option.value
                
                if(val && option.label.toLowerCase().startsWith(val.toLowerCase())) {
                    ul.appendChild(li)
                } else if(!val) {
                    ul.appendChild(li)
                }
            }
        }
    }
  
    function createTag(option) {
        const itemDiv = document.createElement('div');
        itemDiv.classList.add('item-container');
        const itemLabel = document.createElement('div');
        itemLabel.classList.add('item-label');
        itemLabel.innerHTML = option.label
        itemLabel.dataset.value = option.value 
        const itemClose = new DOMParser().parseFromString(`<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="item-close-svg">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>`, 'image/svg+xml').documentElement
  
        itemClose.addEventListener('click', (e) => {
            const unselectOption = options.find((op) => op.value == option.value)
            unselectOption.selected = false
            removeTag(option.value)
            initOptions()
            setValues()
        })
    
        itemDiv.appendChild(itemLabel)
        itemDiv.appendChild(itemClose)
        inputContainer.append(itemDiv)
    }
  
    function enableItemSelection() {
        for(var li of ul.children) {
            li.addEventListener('click', (e) => {
                options.find((o) => o.value == e.target.dataset.value).selected = true
                input.value = null
                initOptions()
                setValues()
                input.focus()
            })
        }
    }
  
    function isTagSelected(val) {
        for(var child of inputContainer.children) {
            if(!child.classList.contains('input-body') && child.firstChild.dataset.value == val) {
                return true
            }
        }
        return false
    }
    
    function removeTag(val) {
        for(var child of inputContainer.children) {
            if(!child.classList.contains('input-body') && child.firstChild.dataset.value == val) {
                inputContainer.removeChild(child)
            }
        }
    }
    
    function setValues() {
        for(var i = 0; i < options.length; i++) {
            element.options[i].selected = options[i].selected
        }
    }
    
    function getOptions() {
        return [...element.options].map((op) => {
            return {
                value: op.value,
                label: op.label,
                selected: op.selected,
            }
        });
    }
}

function initMultiStepForm() {
    const multisteps = document.getElementById("multisteps") || document.querySelector("[data-multi]");
    const steps = multisteps ? [...multisteps.querySelectorAll("[data-step]")] : [];
    
    if (!multisteps || steps.length === 0) {
        console.error("Multi-step form elements not found");
        return;
    }

    let currentStep = steps.findIndex(step => step.classList.contains("active"));
    if (currentStep === -1) {
        currentStep = 0;
        steps[0].classList.add("active");
    }

    const nextBtns = multisteps.querySelectorAll("[data-next]");
    const prevBtns = multisteps.querySelectorAll("[data-prev]");
    const submitBtn = document.querySelector("[data-save]");
    const selectOptions = document.querySelectorAll(".option");

    let selectedActivity = "";

    const formData = {
        owner: '',
        business: '',
        phone: '',
        email: '',
        street: '',
        city: '',
        postal_code: '',
        password: '',
        activity: '',
        days_open: [],
        photo: null
    };

    prevBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            steps[currentStep].classList.remove("active");
            currentStep--;
            steps[currentStep].classList.add("active");
        });
    });

    nextBtns.forEach(btn => {
        btn.addEventListener("click", () => {
            collectStepData(currentStep);
            steps[currentStep].classList.remove("active");
            currentStep++;
            steps[currentStep].classList.add("active");
        });
    });

    options.forEach(option => {
        option.addEventListener("click", () => {
            selectedActivity = option.getAttribute("data-value");
            document.getElementById("activity").value = selectedActivity;
        });
    });

    function collectStepData(stepIndex) {
        switch (stepIndex) {
            case 0:
                formData.owner = document.querySelector('#owner').value;
                formData.business = document.querySelector('#business').value;
                formData.phone = document.querySelector('#phone').value;
                formData.email = document.querySelector('#email').value;
                break;

            case 1:
                formData.street = document.querySelector('#address').value;
                formData.city = document.querySelector('#city').value;
                formData.postal_code = document.querySelector('#postal_code').value;
                formData.password = document.querySelector('#password').value;
                break;

            case 2:
                formData.activity = document.getElementById('activity').value;
                const joursSelect = document.getElementById('jours');
                const selectedDays = Array.from(joursSelect.selectedOptions).map(opt => opt.value);
                formData.days_open = selectedDays;

                const fileInput = document.querySelector('input[type="file"]');
                if (fileInput && fileInput.files.length > 0) {
                    formData.photo = fileInput.files[0];
                }
                break;
        }
    }

    async function sendDataToLaravel() {
        for (let i = 0; i <= 2; i++) {
            collectStepData(i);
        }

        try {
            const token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
            const payload = new FormData();

            for (let key in formData) {
                if (key === 'days_open') {
                    payload.append(key, JSON.stringify(formData[key]));
                } else if (key === 'photo' && formData.photo) {
                    payload.append(key, formData[key]);
                } else {
                    payload.append(key, formData[key]);
                }
            }

            const response = await fetch('/vendeur/signup', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': token
                },
                body: payload
            });

            const result = await response.json();

            if (response.ok) {
                alert('Inscription réussie !');
                window.location.href = '/vendeur/dashboard';
            } else {
                alert('Erreur: ' + (result.message || 'Veuillez vérifier les champs.'));
            }
        } catch (error) {
            console.error('Erreur :', error);
            alert('Une erreur est survenue.');
        }
    }

    if (submitBtn) {
        submitBtn.addEventListener("click", function (e) {
            e.preventDefault();
            
            const joursSelect = document.getElementById('jours');
            if (!joursSelect || joursSelect.selectedOptions.length === 0) {
                alert('Veuillez sélectionner au moins un jour d\'ouverture');
                joursSelect?.classList?.remove('hidden');
                joursSelect?.focus();
                return;
            }

            collectStepData(currentStep);
            sendDataToLaravel();
        });
    }
}

// Initialiser le formulaire lorsque le DOM est chargé
document.addEventListener("DOMContentLoaded", function() {
    initMultiStepForm();
});
