const container = document.getElementById('container');

let draggedItem = null;

container.addEventListener('dragstart', function(e) {
  draggedItem = e.target;
  setTimeout(() => {
    e.target.style.display = 'none';
  }, 0);
});

container.addEventListener('dragend', function() {
  setTimeout(() => {
    draggedItem.style.display = 'block';
    draggedItem = null;
  }, 0);
});

container.addEventListener('dragover', function(e) {
  e.preventDefault();
});

container.addEventListener('dragenter', function(e) {
  e.preventDefault();
  if (e.target.classList.contains('draggable')) {
    e.target.style.backgroundColor = 'lightgray';
  }
});

container.addEventListener('dragleave', function(e) {
  if (e.target.classList.contains('draggable')) {
    e.target.style.backgroundColor = '';
  }
});

container.addEventListener('drop', function(e) {
  e.preventDefault();
  if (e.target.classList.contains('draggable')) {
    container.insertBefore(draggedItem, e.target);
    e.target.style.backgroundColor = '';
  } else {
    container.appendChild(draggedItem);
  }
});
