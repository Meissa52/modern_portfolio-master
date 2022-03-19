import React from 'react';
import PropTypes from 'prop-types';
// THIS ARE THE COMPONENT
const Card = ({property}) => {
// renders all the information from the property object inside of style component
    const {index, price, picture, city, address, carOnSale} = property;
    return (
        <div id={`card-${index}`} className="card">
            <img src={picture} alt={city} />
            <div className="details">
                <span className="index">{index+1}</span>
                <p className="location">
                    {city}<br />
                    {address}<br />
                    {price}
                </p>
                <ul className="features">
                    <li className="icon-car">{carOnSale} <span>car</span></li>
                </ul>
            </div>
        </div>
    )
}

Card.propTypes = {
    property: PropTypes.object.isRequired
}

export default Card;