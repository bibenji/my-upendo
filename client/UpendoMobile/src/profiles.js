import React, { Component } from 'react';

import {  
  StyleSheet,
  Text,
  View,
  Button
} from 'react-native';

export default class Profiles extends Component {
	constructor(props) {
        super(props);
        this.state = {
			
		};
    }
	
	static navigationOptions = {
		title: "Upendo Profiles",
	};
	
	render() {		
		return (												
			<View style={styles.container}>
				<Text style={styles.welcome}>
					Consulter les profils
				</Text>
				<Text style={styles.instructions}>
					Des profils triés sur le volet !
				</Text>
			</View>
		);
	}
};

const styles = StyleSheet.create({	
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: '#F5FCFF',
  },
  welcome: {
    fontSize: 20,
    textAlign: 'center',
    margin: 10,
  },
  instructions: {
    textAlign: 'center',
    color: '#333333',
    marginBottom: 5,
  },	
});