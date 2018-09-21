//Functions
function notify(title, content, type, delay) {
  new PNotify({
    title: title,
    text: content,
    styling: 'bootstrap3',
    type: type,
    delay: delay
  });
}
