import { useState } from 'react';
import './Register.css';
import { Link } from 'react-router-dom';

function Register() {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [firstname, setFirstName] = useState('');
  const [middlename, setMiddleName] = useState('');
  const [lastname, setLastName] = useState('');
  const [contact, setContact] = useState('');

  const handleRegister = async (e) => {
    e.preventDefault();
  
    const data = { email, password, firstname, middlename, lastname, contact };
  
    try {
      const response = await fetch('http://localhost/movieproject-api/register.php', { 
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
      });
  
      if (!response.ok) {
        throw new Error('Network response was not ok ' + response.statusText);
      }
  
      const result = await response.json();
      console.log(result);
    } catch (error) {
      console.error('Error:', error);
    }
  };
  
  
  return (
    <div className='Register'>
      <div className='main-container'>
        <h3>Register</h3>
        <form onSubmit={handleRegister}>
          <div className='form-container'>
            <div className='form-group'>
              <label>Email:</label>
              <input
                type='email'
                value={email}
                onChange={(e) => setEmail(e.target.value)}
                required
              />
            </div>

            <div className='form-group'>
              <label>Password:</label>
              <input
                type='password'
                value={password}
                onChange={(e) => setPassword(e.target.value)}
                required
              />
            </div>

            <div className='form-group'>
              <label>First Name:</label>
              <input
                type='text'
                value={firstname}
                onChange={(e) => setFirstName(e.target.value)}
                required
              />
            </div>

            <div className='form-group'>
              <label>Middle Name:</label>
              <input
                type='text'
                value={middlename}
                onChange={(e) => setMiddleName(e.target.value)}
              />
            </div>

            <div className='form-group'>
              <label>Last Name:</label>
              <input
                type='text'
                value={lastname}
                onChange={(e) => setLastName(e.target.value)}
                required
              />
            </div>

            <div className='form-group'>
              <label>Contact:</label>
              <input
                type='tel'
                value={contact}
                onChange={(e) => setContact(e.target.value)}
                required
              />
            </div>

            <div className='submit-container'>
              <button type='submit'>Register</button>
              <div className='back-to-login'>
                <Link to='/'>
                  <button>Back to Login</button>
                </Link>
              </div>
            </div>
          </div>
          
        </form>
        
      </div>
    </div>
  );
}

export default Register;
