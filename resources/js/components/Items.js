//todo render each item with its current state

import axios from 'axios'
import React, {Component} from 'react'

class Items extends Component {
    constructor() {
        super()
        this.state = {
            user: [],
            items: []
        }
    }

    componentDidMount () {
        const userID = 1 //from session
        axios.get(`/test/get-user-items/${userID}`).then(response => {
            console.log(response.data);
            this.setState({
                user: response.data,
                items: response.data.items
            })

        })
    }

    render() {
        const { items } = this.state
        return (
            <ul className='list-group list-group-flush'>
                {items.map(item => (
                        <span className='badge badge-primary badge-pill'>
                            {item.name}
                          </span>
                ))}
            </ul>
        )
    }
}

export default Items
