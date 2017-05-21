import React, { Component } from 'react';

import {  
  StyleSheet,
  Text,
  View,
  Button
} from 'react-native';

import { StackNavigator, } from 'react-navigation';

/*
export default class Index extends Component {
	constructor(props) {
        super(props);
        this.state = {
			
		};
    }
	
	render() {		
		return (												
			<View style={styles.container}>
				<Text style={styles.welcome}>
					Bienvenue sur Upendo Mobile
				</Text>
				<Text style={styles.instructions}>
					Rencontres sur mesure et sur mobile.
				</Text>
			</View>
		);
	}
};
*/

class ChatScreen extends Component {
	static navigationOptions = {
		title: 'Chat with Lucy',
	};
	
	render() {
		return (
			<View>
				<Text>Chat with Lucy</Text>
			</View>
		);
	}
};

class Home extends Component {
	static navigationOptions = {
		title: 'Welcome',
	};
	
	render() {
		// const { navigate } = this.props.navigation;
		return (												
			<View style={styles.container}>
				<Text style={styles.welcome}>
					Bienvenue sur Upendo Mobile
				</Text>
				<Text style={styles.instructions}>
					Rencontres sur mesure et sur mobile.
				</Text>				
				<Button
					onPress={() => navigate('Chat')}
					title="Chat with Lucy"
				/>				
			</View>
		);
	}
};

export const Index = StackNavigator({
  // Index: { screen: Index },
  Chat: { screen: ChatScreen },
});

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