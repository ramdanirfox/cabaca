function buatTabel() {
    const grid = new gridjs.Grid({
        // columns: ['Name', 'Email', 'Phone Number'],
        data: [
          ['John', 'john@example.com', '(353) 01 222 3333'],
          ['Mark', 'mark@gmail.com',   '(01) 22 888 4444']
        ],
        resizable: true,
        sort: true
      }).render(document.getElementById('wrapper'));
}

buatTabel();