function scrollToElement(id){
  const target = document.querySelector(`#${id}`)
  target.scrollIntoView({behavior: 'smooth'})
}

document.querySelector('#btn-variables').addEventListener('click', ()=>scrollToElement('variables'))