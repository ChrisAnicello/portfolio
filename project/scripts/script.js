        let y=8;
        let x=1;
        let score=100;

        let world = [
            [2,2,2,2,2,2,2,2,2,2],
            [2,1,2,1,1,1,1,1,1,2],
            [2,1,2,1,1,1,1,2,1,2],
            [2,1,2,2,2,2,1,1,1,2],
            [2,1,1,1,1,2,1,2,1,2],
            [2,1,1,2,2,2,1,2,1,2],
            [2,1,1,2,1,1,1,2,1,2],
            [2,1,1,1,2,2,2,2,1,2],
            [2,0,1,1,1,1,1,1,1,2],
            [2,2,2,2,2,2,2,2,2,2]
        ];

        function createWorld(){
            let output = '';

            for(let i=0; i<world.length;i++){
                output+= "\n<div class='row'>\n";
                for(let j=0; j<world[i].length;j++){
                    if(world[i][j]==2){
                        output+="<div class='brick'></div>";
                    }
                    if(world[i][j]==1){
                        output+="<div class='coin'></div>";
                    }
                    if(world[i][j]==0){
                        output+="<div class='pacmanimg'></div>";
                    }
                    if(world[i][j]==3){
                        output+="<div class='emptyspace'></div>";
                    }
                }
                output += "\n</div>";
            }
            document.getElementById('points').innerHTML= score;
            document.getElementById('world').innerHTML = output;
        }
        document.onkeydown =function(e){
            console.log(e.keyCode);
            if(e.keyCode==38){
                if(world[y-1][x]!=2){
                    if(world[y-1][x]==1){
                        score+=100;
                    }
                    y-=1;
                    world[y][x]=0;
                    world[y+1][x]=3;
                    createWorld();
                }

            }
            if(e.keyCode==40){
                if(world[y+1][x]!=2){
                    if(world[y+1][x]==1){
                        score+=100;
                    }
                    y+=1;
                    world[y][x]=0;
                    world[y-1][x]=3;
                    createWorld();
                }
            }
            if(e.keyCode==37){
                if(world[y][x-1]!=2){
                    if(world[y][x-1]==1){
                        score+=100;
                    }
                    x-=1;
                    world[y][x]=0;
                    world[y][x+1]=3;
                    createWorld();

                }
            }
            if(e.keyCode==39){
                if(world[y][x+1]!=2){
                    if(world[y][x+1]==1){
                        score+=100;
                    }
                    x+=1;
                    world[y][x]=0;
                    world[y][x-1]=3;
                    createWorld();
                }
            }
        }
        createWorld();

