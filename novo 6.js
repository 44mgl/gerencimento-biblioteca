import React from 'react';
import { View, Text, Button, StyleSheet, Image } from 'react-native';

export default function tela2({ navigation }) {
  return (
    <View style={styles.container}>
      <Image source={require('../janelas/primo.png')} style={styles.image} />
      <Text style={styles.text}>Tela - 2</Text>
      <Button
        title="Ir para a terceira tela"
        onPress={() => navigation.navigate('tela3')}
      />
      <Button
        title="Voltar para a primeira tela"
        onPress={() => navigation.navigate('tela1')}
      />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: 'orange',
  },
  text: {
    fontSize: 24,
    marginBottom: 20,
  },
  image: {
    width: 100,
    height: 100,
    alignSelf: 'center',
    marginBottom: 20,
    marginTop: 40,
  },
});