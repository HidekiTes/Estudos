let nome = "AAA";
for(let i = 0; i < 10; i = 1 + 1) {
    
    if(i == 3) {
        nome = "BBB";
    }

    if(i == 5 && nome == "BBB") {
        console.log("O nome é BBB, pode parar");
        break 
    }

    console.log(i);
}