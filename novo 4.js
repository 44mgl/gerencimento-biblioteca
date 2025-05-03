import React from 'react';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';

import tela1 from './janelas/tela1';
import tela2 from './janelas/tela2';
import tela3 from './janelas/tela3';

const Stack = createStackNavigator();

export default function App() {
  return (
    <NavigationContainer>
      <Stack.Navigator initialRouteName="tela1">
        <Stack.Screen name="tela1" component={tela1} />
        <Stack.Screen name="tela2" component={tela2} />
        <Stack.Screen name="tela3" component={tela3} />
      </Stack.Navigator>
    </NavigationContainer>
  );
}