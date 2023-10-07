import Editor from '@toast-ui/editor'

import  '@toast-ui/editor/dist/toastui-editor.css';

const element = document.querySelector('#editorPost');


const editor = new Editor({
  el: element,
  height:'300px',
  initialEditType: 'markdown',
  placeholder: 'Write something cool!',
  
})




document.querySelector('#post').addEventListener('submit', e => {
  e.preventDefault();
  document.querySelector('#postcontent').value = editor.getMarkdown();
  e.target.submit();
});