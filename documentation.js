// Contact Page
const toggle1 = document.querySelector('.section-tag-1')
const contact = document.querySelector('.contact-page')

toggle1.addEventListener('click', function(){
    contact.classList.toggle('contact-active')
})

// Sign Up Page
const toggle2 = document.querySelector('.section-tag-2')
const signup = document.querySelector('.signup-page')

toggle2.addEventListener('click', function(){
    signup.classList.toggle('signup-active')
})

// Hello and Change Password Page
const toggle3 = document.querySelector('.section-tag-3')
const hello = document.querySelector('.hello-page')
const change = document.querySelector('.change-page')

toggle3.addEventListener('click', function(){
    hello.classList.toggle('hello-active')
    change.classList.toggle('change-active')
})

// Signature Page
const toggle4 = document.querySelector('.section-tag-4')
const signature = document.querySelector('.signature-page')

toggle4.addEventListener('click', function(){
    signature.classList.toggle('signature-active')
})

// Contact Page Modal
const openContact = document.getElementById('open-contact')
const closeContact = document.getElementById('close-contact')
const contactContainer = document.getElementById('contact_container')

openContact.addEventListener('click', () => {
    contactContainer.classList.add('modal-1')
})

closeContact.addEventListener('click', () => {
    contactContainer.classList.remove('modal-1')
})

// Sign Up Page Modal
const openSign = document.getElementById('open-sign')
const closeSign = document.getElementById('close-sign')
const signContainer = document.getElementById('sign_container')

openSign.addEventListener('click', () => {
    signContainer.classList.add('modal-2')
})

closeSign.addEventListener('click', () => {
    signContainer.classList.remove('modal-2')
})

// Hello Page Modal 
const openHello = document.getElementById('open-hello')
const closeHello = document.getElementById('close-hello')
const helloContainer = document.getElementById('hello_container')

openHello.addEventListener('click', () => {
    helloContainer.classList.add('modal-3')
})

closeHello.addEventListener('click', () => {
    helloContainer.classList.remove('modal-3')
})

// Change Password Modal
const openCpass = document.getElementById('open-cpass')
const closeCpass = document.getElementById('close-cpass')
const cpassContainer = document.getElementById('cpass_container')

openCpass.addEventListener('click', () => {
    cpassContainer.classList.add('modal-4')
})

closeCpass.addEventListener('click', () => {
    cpassContainer.classList.remove('modal-4')
})

// Signature Modal
const openSignature = document.getElementById('open-signature')
const closeSignature = document.getElementById('close-signature')
const signatureContainer = document.getElementById('signature_container')

openSignature.addEventListener('click', () => {
    signatureContainer.classList.add('modal-5')
})

closeSignature.addEventListener('click', () => {
    signatureContainer.classList.remove('modal-5')
})

