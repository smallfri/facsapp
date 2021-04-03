import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'

import Main from "./Main";

class App extends Component {
    render () {
        return (
            <BrowserRouter>
                <div>
                    <Switch>
                        <Route exact path='/' component={Main} />
                    </Switch>
                </div>
            </BrowserRouter>
        )
    }
}

ReactDOM.render(<App />, document.getElementById('app'))


export default App;
