import Editor from '@toast-ui/editor'
import  '@toast-ui/editor/dist/toastui-editor.css';

const elementupdate = document.querySelector('#editorUpdate');


const editorupdate = new Editor({
  el: elementupdate,
  height:'600px',
  initialEditType: 'markdown',
  placeholder: 'Write something cool!',
  
})




document.querySelector('#updateProject').addEventListener('submit', e => {
  e.preventDefault();
  document.querySelector('#contentupdate').value = editorupdate.getMarkdown();
  e.target.submit();
});