import Editor from '@toast-ui/editor'

import  '@toast-ui/editor/dist/toastui-editor.css';

const element = document.querySelector('#editorUpdate');


const editor = new Editor({
  el: element,
  height:'600px',
  initialEditType: 'markdown',
  placeholder: 'Write something cool!',
  
})




document.querySelector('#updateProject').addEventListener('submit', e => {
  e.preventDefault();
  document.querySelector('#contentupdate').value = editor.getMarkdown();
  e.target.submit();
});