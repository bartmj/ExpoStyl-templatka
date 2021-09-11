<div id="consent-popup" class="consent-hidden">
        <p>By browsing our website, you consent to our use of cookies. <a class="accept" onclick="alertDetails()">Szczegóły</a>
            <a id="accept" class="accept" href="#">Accept</a>
        </p>
</div>

<script>
const alertDetails = () => {
    alert("Strona www.expostyl.com jest strona wizytówkowa firmy i nie zbiera wielu danych o użytkowniku.\n\ ")
}

const cookieStorage = {
    getItem: (item) => {
        const cookies = document.cookie
            .split(';')
            .map(cookie => cookie.split('='))
            .reduce((acc, [key, value]) => ({ ...acc, [key.trim()]: value }), {});
        return cookies[item];
    },
    setItem: (item, value) => {
        document.cookie = `${item}=${value};`
    }
}

const storageType = cookieStorage;
const consentPropertyName = 'jdc_consent';
const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {

    const acceptFn = event => {
        saveToStorage(storageType);
        consentPopup.classList.add('consent-hidden');
    }
    const consentPopup = document.getElementById('consent-popup');
    const acceptBtn = document.getElementById('accept');
    acceptBtn.addEventListener('click', acceptFn);

    if (shouldShowPopup(storageType)) {
        setTimeout(() => {
            consentPopup.classList.remove('consent-hidden');
        }, 0);
    }

};
</script>


