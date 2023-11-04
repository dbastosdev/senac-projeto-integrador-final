// Menu de Acessibilidade
document.addEventListener('DOMContentLoaded', function() {
    M.AutoInit();

    /* Set dropdown menu to show below the trigger */
    var elems = document.querySelectorAll('.dropdown-trigger');
    M.Dropdown.init(elems, { coverTrigger : false, closeOnClick : false });
    
    /* Add button keyboard behavior to elements with [role=button] */
    const custom_buttons = document.querySelectorAll('[role=button]');
    Array.from(custom_buttons).forEach(button => {
        button.addEventListener('keypress', function(e) {
            /* Check key code for Space bar and Enter */
            if(e.keyCode == 32 || e.keyCode == 13) {
                e.preventDefault();
                this.click();
            }
        });
    });

    const toggleBoolAttribute = function(element, attribute) {
        let estado = element.getAttribute(attribute);

        if(estado === 'true') {
            element.setAttribute(attribute, false);
        } else {
            element.setAttribute(attribute, true);
        }
    }

    /* Add aria-expandable toggle behavior to expandable container triggers */
    const dropdown_triggers = document.querySelectorAll('.dropdown-trigger, .collapsible-header');
    Array.from(dropdown_triggers).forEach(trigger => {
        trigger.addEventListener('click', () => toggleBoolAttribute(trigger, 'aria-expanded'));
    });

    /* "Skip to" buttons behavior */
    const skip_buttons = document.querySelectorAll('.skip1, .skip2, .skip3'); 
    Array.from(skip_buttons).forEach(button => {
        button.addEventListener('click', function(event) {
            var skipBehavior = function() {
                this.removeAttribute('tabindex');
            }

            var skip_element = document.getElementById(this.href.split('#')[1]);
            skip_element.setAttribute('tabindex', -1);
            skip_element.addEventListener('focus, blur', skipBehavior)
            skip_element.focus();
        });
    });
    
    /* Função de Alto Contraste */
    (function () {
        const Contrast = {
            storage: 'contrastState',
            cssClass: 'contrast',
            currentFontSize: null,
            check: checkContrast,
            getState: getContrastState,
            setState: setContrastState,
            toggle: toggleContrast,
            updateView: updateViewContrast
        };

        window.toggleContrast = function () { Contrast.toggle(); };

        Contrast.check();

        function checkContrast() {
            this.updateView();
        }

        function getContrastState() {
            return localStorage.getItem(this.storage) === 'true';
        }

        function setContrastState(state) {
            localStorage.setItem(this.storage, '' + state);
            this.currentState = state;
            this.updateView();
        }

        function updateViewContrast() {
            let body = document.body;

            if (this.currentState === null || typeof this.currentState === 'undefined')
                this.currentState = this.getState();

            if (this.currentState)
                body.classList.add(this.cssClass);
            else
                body.classList.remove(this.cssClass);
        }

        function toggleContrast() {
            this.setState(!this.currentState);
        }

    })();
});

// Menu de Acessibilidade
document.addEventListener('DOMContentLoaded', function() {
    M.AutoInit();

    /* Set dropdown menu to show below the trigger */
    var elems = document.querySelectorAll('.dropdown-trigger');
    M.Dropdown.init(elems, { coverTrigger : false, closeOnClick : false });
    
    /* Add button keyboard behavior to elements with [role=button] */
    const custom_buttons = document.querySelectorAll('[role=button]');
    Array.from(custom_buttons).forEach(button => {
        button.addEventListener('keypress', function(e) {
            /* Check key code for Space bar and Enter */
            if(e.keyCode == 32 || e.keyCode == 13) {
                e.preventDefault();
                this.click();
            }
        });
    });

    const toggleBoolAttribute = function(element, attribute) {
        let estado = element.getAttribute(attribute);

        if(estado === 'true') {
            element.setAttribute(attribute, false);
        } else {
            element.setAttribute(attribute, true);
        }
    }

    /* Add aria-expandable toggle behavior to expandable container triggers */
    const dropdown_triggers = document.querySelectorAll('.dropdown-trigger, .collapsible-header');
    Array.from(dropdown_triggers).forEach(trigger => {
        trigger.addEventListener('click', () => toggleBoolAttribute(trigger, 'aria-expanded'));
    });

    /* "Skip to" buttons behavior */
    const skip_buttons = document.querySelectorAll('.skip1, .skip2, .skip3'); 
    Array.from(skip_buttons).forEach(button => {
        button.addEventListener('click', function(event) {
            var skipBehavior = function() {
                this.removeAttribute('tabindex');
            }

            var skip_element = document.getElementById(this.href.split('#')[1]);
            skip_element.setAttribute('tabindex', -1);
            skip_element.addEventListener('focus, blur', skipBehavior)
            skip_element.focus();
        });
    });
    
    /* Função de Alto Contraste */
    (function () {
        const Contrast = {
            storage: 'contrastState',
            cssClass: 'contrast',
            currentFontSize: null,
            check: checkContrast,
            getState: getContrastState,
            setState: setContrastState,
            toggle: toggleContrast,
            updateView: updateViewContrast
        };

        window.toggleContrast = function () { Contrast.toggle(); };

        Contrast.check();

        function checkContrast() {
            this.updateView();
        }

        function getContrastState() {
            return localStorage.getItem(this.storage) === 'true';
        }

        function setContrastState(state) {
            localStorage.setItem(this.storage, '' + state);
            this.currentState = state;
            this.updateView();
        }

        function updateViewContrast() {
            let body = document.body;

            if (this.currentState === null || typeof this.currentState === 'undefined')
                this.currentState = this.getState();

            if (this.currentState)
                body.classList.add(this.cssClass);
            else
                body.classList.remove(this.cssClass);
        }

        function toggleContrast() {
            this.setState(!this.currentState);
        }

    })();
});

/* Change Font Size */
function fonte(e) {
    var elementos = document.querySelectorAll(
            'p, h2, h3, h4, h5, h6, span, li'
        );

    for(const elemento of elementos) {
        var fonte = window.getComputedStyle(elemento, null).getPropertyValue('font-size');
        var fonte_normal = window.getComputedStyle(document.getElementsByTagName('body')[0], null).getPropertyValue('font-size');
        
        if (e === 'a') {
            elemento.style.fontSize = (parseInt(fonte) + 1) + "px";
        }
        if (e === 'd') {
            elemento.style.fontSize = (parseInt(fonte) - 1) + "px";
        }
        if (e === 'r') {
            elemento.style.fontSize = fonte_normal;
            
            var headings = document.querySelectorAll('h1, h2, h3, h4, h5, h6');
            for(const heading of headings) {
                heading.removeAttribute('style');
            }
        }
    }
}



