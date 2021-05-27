import React from 'react'
import ReactDOM from 'react-dom'
import Regist from './components/regist'

 
const App = () => {
    return (
        <>
            <Regist />
        </>
    )
}
 
ReactDOM.render( 
    <App />,
    document.getElementById('app')
)