import Editor from '@toast-ui/editor'

import  '@toast-ui/editor/dist/toastui-editor.css';

const element = document.querySelector('#editor');


const editor = new Editor({
  el: element,
  height:'600px',
  initialEditType: 'markdown',
  placeholder: 'Write something cool!',
  
})


document.querySelector('#createPostForm').addEventListener('submit', e => {
  e.preventDefault();
  document.querySelector('#content').value = editor.getMarkdown();
  e.target.submit();
});

