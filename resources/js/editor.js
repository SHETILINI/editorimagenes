import ImageEditor from "tui-image-editor";
const instance = new ImageEditor(document.querySelector('#tui-image-editor'), {
  cssMaxWidth: 700,
  cssMaxHeight: 500,
  selectionStyle: {
    cornerSize: 20,
    rotatingPointOffset: 70,
  },
});