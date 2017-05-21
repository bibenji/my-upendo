import React, { Component } from 'react';

import {  
  StyleSheet,
  Text,
  View,
  Button
} from 'react-native';

export default class Home extends Component {
	constructor(props) {
        super(props);
        this.state = {
			
		};
    }
	
	static navigationOptions = {
		title: "Upend'Home",
	};
	
	render() {	
		const { navigate } = this.props.navigation;	
		return (												
			<View style={styles.container}>
				<Text style={styles.welcome}>
					Bienvenue sur Upendo Mobile
				</Text>
				<Text style={styles.instructions}>
					Rencontres sur mesure et sur mobile.
				</Text>
				<Button
					onPress={() => navigate('Profiles')}
					title="Profiles"
				/>				
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