function scrollToElement(id){
  const target = document.querySelector(`#${id}`)
  target.scrollIntoView({behavior: 'smooth'})
}

document.querySelector('#btn-variables').addEventListener('click', ()=>scrollToElement('variables'))
document.querySelector('#btn-arrays').addEventListener('click', ()=>scrollToElement('arrays'))
document.querySelector('#btn-conditionals').addEventListener('click', ()=>scrollToElement('conditionals'))
document.querySelector('#btn-loops').addEventListener('click', ()=>scrollToElement('loops'))
document.querySelector('#btn-functions').addEventListener('click', ()=>scrollToElement('functions'))
document.querySelector('#btn-superglobals').addEventListener('click', ()=>scrollToElement('superglobals'))