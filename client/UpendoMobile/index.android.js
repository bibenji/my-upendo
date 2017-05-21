/**
 * Sample React Native App
 * https://github.com/facebook/react-native
 * @flow
 */

import React, { Component } from 'react';
import {
	AppRegistry,
	Text
} from 'react-native';

import { StackNavigator } from 'react-navigation';

import Home from './src/home';
import Profiles from './src/profiles';

const SimpleApp = StackNavigator({
  Home: { screen: Home },
  Profiles: { screen: Profiles },
});

AppRegistry.registerComponent('UpendoMobile', () => SimpleApp);
