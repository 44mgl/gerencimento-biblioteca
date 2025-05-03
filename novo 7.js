import React from 'react';
import { View, Text, Button, StyleSheet, Image } from 'react-native';

export default function tela3({ navigation }) {
  return (
    <View style={styles.container}>
    <Image source={require('../janelas/fatorial.png')} style={styles.image} />
      <Text style={styles.text}>Tela - 3</Text>
      <Button
        title="Voltar para a tela2"
        onPress={() => navigation.navigate('tela2')}
      />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: 'magenta',
  },
  text: {
    fontSize: 24,
    marginBottom: 20,
  },
  image: {
    width: 100,
    height: 200,
    alignSelf: 'center',
    marginBottom: 20,
    marginTop: 40,
  },
});