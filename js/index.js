function scrollToElement(id){
  const target = document.querySelector(`#${id}`)
  target.scrollIntoView({behavior: 'smooth'})
}

function navigateHome(){
  console.log('called')
  return window.location.href = '/'
}
function navigateTodo(){
  return window.location.href = '/todo/index.php'
}
function navigateClasses(){
  return window.location.href = '/classes/index.php'
}
function navigateNotes(){
  return window.location.href = '/notes/index.php'
}

document.querySelector('#btn-variables').addEventListener('click', ()=>scrollToElement('variables'))
document.querySelector('#btn-arrays').addEventListener('click', ()=>scrollToElement('arrays'))
document.querySelector('#btn-conditionals').addEventListener('click', ()=>scrollToElement('conditionals'))
document.querySelector('#btn-loops').addEventListener('click', ()=>scrollToElement('loops'))
document.querySelector('#btn-functions').addEventListener('click', ()=>scrollToElement('functions'))
document.querySelector('#btn-forms').addEventListener('click', ()=>scrollToElement('forms'))
document.querySelector('#btn-cookies').addEventListener('click', ()=>scrollToElement('cookies'))
document.querySelector('#btn-uploads').addEventListener('click', ()=>scrollToElement('uploads'))

document.querySelector('#btn-home').addEventListener('click', navigateHome)
document.querySelector('#btn-todoApp').addEventListener('click', navigateTodo)
document.querySelector('#btn-classes').addEventListener('click', navigateClasses)
document.querySelector('#btn-notes').addEventListener('click', navigateNotes)