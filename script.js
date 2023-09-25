 
     //variable

// let radius = 10;
// const pi=3.14;
// var firstName="Harini";

// console.log(radius);
// console.log(pi);
// console.log(firstName);

// pi=11.5;
// console.log(radius);

      //Scope of variable 

// let age=40;

// console.log(age);
//     age="hhh";
//     console.log(age);

//     if(true) {
//         let age=30;
//         console.log("inside loop" , age);       

//     }
//     console.log("outside loop" , age);


      //Scope of variable 2
// let age=50;
// if(true) {
//     let age=30;
//     let firstName="Harini";
//     console.log(age);
//     console.log(firstName);
// }
// console.log(age);
// console.log(firstName);

      //primitive datatype store the value in the stack - adds value to the stack and locks variable name to it as an accessor to that value.

// let scoreOne=50;
// let scoreTwo=scoreOne;
// console.log(scoreOne);
// scoreOne=100;
// console.log(scoreOne);
// console.log(scoreTwo);

      //refernce datatype store in heap -it add object into heap
// const userOne={name:"as",age:"25"};
// const userTwo=userOne;
// console.log(userOne,userTwo);
// userOne.age=27;
// console.log(userOne,userTwo);

      //null and undefined datatype
// let age=15; //intensional lack of value
// console.log(age,age+3,'the age is ${age}');

       //NaN
// let result1="20"/2;
// console.log(result1);



        //loose comparision - different datatype 
// let age=25;
// document.write(age==25);
// document.write(age=='25');
// document.write(age!=25);
// document.write(age!='25');


        //  strict comparsion

// let age=25;
// document.write(age===25);
// document.write(age==='25');
// document.write(age!==25);
// document.write(age!=='25');


        //BIDMAS
// let result=5*(10-3)**2;
// document.write(result);


       //increment
      //decrement

      //string

       //  last index method in string

//  let email='harinisree333@gmail.com';
//  let result=email.lastIndexOf('a');
//  document.write(result);


// let likes=10;
// let rr='the likes are' + likes + 'likes';
// document.write(rr);

         //template string
// const title='Best Days Of 2022';
// const author='A-EE';
// const likes=0;

         // normal concatenationn
// let result='the'+title + 'by' +author + 'which is ' + likes;
// document.write(result);


         //template string

// let result= 'the ${title} by by ${author} which is ${likes}';
// document.write(result);

         //injected into html

      //    let html=`
      //    <h2>${title}</h2>
      //    <p>${author}</p>
      //    <span>${likes}</span>`;
         
      //    document.write(html);


         //arrays

// let college=['kpr','ksr','psg'];
// document.write(college+"<br>"); 
// document.write(college[1]+"<br>");

// college[2]='gct';
// document.write(college);

         //array property

// let ran=['psg', 'kct',10,20];
// console.log(ran.length);

//array method
// let result=ran.join('&');
// console.log(result);

// document.write(ran.indexOf('kct'));

            //concat method
// let res=ran.concat([100,200]);
// document.write(res);

           //push method
//  let res=ran.push('101','102');
//  console.log(ran); //returns the integer value

           //pop method

//  let res1=ran.pop();
//  console.log(res1);

             //boolean - evaluate condition


             //date object difference

// const date=new Date();
// document.write(date);

// const formattedDate=date.toLocaleString("en-GB",{
//     month:"numeric",
//     day:"2-digit",
//     year:"2-digit"
// });
// console.log(formattedDate)

  //call back funstion
  //arrow funstion

  //comparison operator to compares two things together and they are going to return true or false
// let age=20;
// console.log(age==20); // abstract or loose equality which means that values type is not considered
// console.log(age!=20);
// console.log(age>20);
// console.log(age>=20);
// console.log(age<20);
// console.log(age<=20);

//Type Conversion
//Turning one data type to another data type
// let score="100";
// score=Number(score); // convert string to int
// document.write(score +1);
// document.write(typeof score);

// let result=Number("hello");
// document.write(result);   //NaN

// let result=String(50);
// document.write(result);

  //for loop
//   for(let i=0;i<5;i++)
//   {
//       document.write("in loop",i);
//   }
//   document.write("loop closed");
  
//   const names=['iiia','iiib','iiic'];
  
//   for(let i=0;i<names.length;i++)
//   {
//       document.write(names[i]);
//   }

  //while loop
//   let i=0;
//   while(i<5){
//       document.write("in loops",i);
//       i++;
//   }
//   const names=['xx','yy','zz'];
//   let i=0;
//   while(i<names.length){
//       document.write(names[i]);
//       i++;
//   }

 //Logical operators
// const pass="p@ss";
// if(pass.length>=2 && pass.includes('@'))
// {
//     document.write("strong enough");
// }

// const pass="p@";
// if(pass.length>=4 && pass.includes('@'))
// {
//     document.write("strong enough");
// }else if(pass.length>=8||pass.includes('@')){
//     document.write("double strong");
// }
  
   //switch statement
// const grade ="D";
// switch(grade){
//        case 'A':
//            console.log("A Class");
//            break;
//        case 'B':
//            console.log("B Class");
//            break;
//        case 'C':
//            console.log("C Class");
//            break;
//        case 'D':
//            console.log("D Class");
//            break;
//        default:
//            console.log("nothing"); 
// }

  //function
// function greet(){  // function declaration
//    console.log("III B Section");
// } 
// greet(); // function call
  
// const ss=function(){                //function expression
//    console.log("III C");
// };
// ss();

  //Arrow function
//   const areaVal=(radius) =>{
//       return 3.14*radius**2;
//   };
 
// const areaVal  = radius =>3.14*radius**2;  // simplified Arrow Function 
// const bb=areaVal(5);
// document.write(bb);

  //functions and methods
// const name="harini";
// const greet= () =>'hello';

// let resultOne=greet();
// console.log(resultOne);

// let resultTwo =name.toUpperCase();
// console.log(resultTwo);

   //call back function - A callback is a function passed as an argument to another function
// const myFunc=(callbackFunc) =>{
//  let value=50;
//  callbackFunc(value);
//   };

//   myFunc(function(value){
//       console.log(value);
//   })

  //forEach – is a method that is used iterate over array it excepts an argument over here a callback function


// let sec=["II A","II B","II C","III A","III B","III C"];

// sec.forEach(function(){
//     document.write("different sections");
// })

// let sec=["II A","II B","II C","III A","III B","III C"];

// sec.forEach(function(val){  // we get access to each element in array
//     document.write(val);
// })

// let sec=["II A","II B","II C","III A","III B","III C"];

// sec.forEach((val,index)=>{
//     document.write(index,val);
// });

  //Passing Callback function 

// let people=['cp','ant','ajay','vvv','nnn'];
// const logPerson = (person,index) =>{
//     console.log(`${index} - hello $(person)`);
// };
// people.forEach(logPerson);


  

  
  
   



  
  



  




 
