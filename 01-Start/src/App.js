import React, { Component } from 'react';
import './App.css';
import Card from './Card';
import data from './data/data'
import logo from './assets/logo.svg';

// class component
class App extends Component {
// THE CONSTRUCTOR IN THE MANE FUNCTION 
// EVERYTHING HAVE TO GO TTRUE IT BEFORE IT PASES
  constructor(props){
    super(props);
    // THIS IS WERE YOU DECLAIRE YOUR DATA
    // SO THAT YOU CAN USE IT IN YOUR COMPONENT
    this.state = {
      // collection of the data from data
      properties: data.properties,
      //GET THE FIRST RECORD
      property: data.properties[0]
    }
  }
  
  nextProperty = () => {
    //THIS GO TO THE NEXT INDEX 
    const newIndex = this.state.property.index+1;
    //THIS.SETsTATE CHANGE THE data of the propoty
    this.setState({
      property: data.properties[newIndex]
    })
  }
  prevProperty = () => {
     //THIS GO TO THE previous INDEX 
    const newIndex = this.state.property.index-1;
    //THIS.SETsTATE CHANGE THE data of the propoty
    this.setState({
      property: data.properties[newIndex]
    })
  }
  //render multiple card
  render() { 
    //declaire the data again
    const {properties, property} = this.state;
    return (

      <div className="App">
        <button
        //creating the previous property button
          onClick={() => this.prevProperty()}
          disabled={property.index === 0}
           >prev</button>
      
         <button
          //creating the next property button
          onClick={() => this.nextProperty()}
        disabled={property.index === data.properties.length-1}
      >Next</button>

      <div className="page">
      <section>
        <img src={logo} className="App-logo" alt="logo" />
        <h1>Image slideshow on react</h1>
      </section>
      
      <div className="col">
      <div className={`cards-slider active-slide-${property.index}`}>
                <div className="cards-slider-wrapper" style={{
                  'transform': `translateX(-${property.index*(100/properties.length)}%)`
                  //this calculation above give us the translatex ofset
                }}>
                 {
                   //this is like a for loop to pass the data to the card
                    properties.map(property => <Card key={property._id} property={property} />)
                  }

                </div>
              </div>
             </div>
             
      </div>
      </div>

    );
  }
}
export default App;