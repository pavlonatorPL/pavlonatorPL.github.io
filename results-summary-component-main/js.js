fetch('data.json')
    .then(response => response.json())
    .then(data => {
      data.forEach((item, index) => {
        const score = item.score;
        const scoreElement = document.getElementById('score' + (index + 1));
        scoreElement.textContent = score;

        const category = item.category;
        const categoryElement = document.getElementById('category' + (index + 1));
        categoryElement.textContent = category;

        const icon = item.icon;
        const iconElement = document.getElementById('icon' + (index + 1));
        iconElement.src = icon;
        // console.log(iconElement.src)
      });
    })

   