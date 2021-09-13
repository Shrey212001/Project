import React from 'react';
import QuickSearchItem from '../components/QuickSearchItem';

class QuickSearches extends React.Component {
    constructor() {
        super();
    }
    render() {
        const { mealtypes } = this.props;
        return (
            <React.Fragment>
                <div className="quicksearch">
                    <p className="quicksearchHeading">
                        Quick Searches
                    </p>
                    <p className="quicksearchSubHeading">
                        Discover restaurants by type of meal
                    </p>
                    <div className="container-fluid">
                  
                           <div className="row">
                           {
                            mealtypes && mealtypes.length > 0 ? (  mealtypes.map((mealtype, index) => {
                                    return <QuickSearchItem key={index} id={index + 1} mealtype={mealtype} />
                                })):null
                                } 
                        </div>
                    </div>
                </div>
            </React.Fragment>
        );
    }
}

export default QuickSearches;