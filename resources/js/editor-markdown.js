import Editor from '@toast-ui/editor'


import  '@toast-ui/editor/dist/toastui-editor.css';
const elementcreate = document.querySelector('#editor');


const editorcreate = new Editor({
  el: elementcreate,
  height:'600px',
  initialEditType: 'markdown',
  placeholder: 'Write something cool!',
  
})


document.querySelector('#createPostForm').addEventListener('submit', e => {
  e.preventDefault();
  document.querySelector('#content').value = editorcreate.getMarkdown();
  e.target.submit();
});

