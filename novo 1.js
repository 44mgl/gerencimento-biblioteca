import React from 'react';
import { StyleSheet, Text, View, Image, ScrollView } from 'react-native';

export default function App() {
  return (
    <ScrollView contentContainerStyle={styles.container}>
     <Text style={styles.texto}>Combos disponíveis</Text>
      <View style={styles.imageContainer}>
        <Image
          source={{ uri: 'https://www.imagensempng.com.br/wp-content/uploads/2022/08/9754.png' }}
          style={styles.image}
        />
        <Text style={styles.caption}>Combo-1</Text>
      </View>

      <View style={styles.imageContainer}>
        <Image
          source={{ uri: 'https://de18f9cbd4.cbaul-cdnwnd.com/c52014eaf39fc838f4f9274e2d025987/200000003-1586015863/COMBO.png?ph=de18f9cbd4' }}
          style={styles.image}
        />
        <Text style={styles.caption}>Combo-2</Text>
      </View>

      <View style={styles.imageContainer}>
        <Image
          source={{ uri: 'https://yata-apix-12c626c1-c4e5-440f-9a8a-6cb1537cb8fa.s3-object.locaweb.com.br/2466c36ec52742e3a2a53dcc671eba96.png' }}
          style={styles.image}
        />
        <Text style={styles.caption}>Combo-3</Text>
      </View>

      <View style={styles.imageContainer}>
        <Image
          source={{ uri: 'https://storage.alfalabs.com.br/assets/imgClientes/cardapio/id-103/categorias/2021-12-10_22-01-40.jpg' }}
          style={styles.image}
        />
        <Text style={styles.caption}>Combo-4</Text>
      </View>
    </ScrollView>
  );
}

const styles = StyleSheet.create({
  container: {
    flexGrow: 1,
    justifyContent: 'center',
    alignItems: 'center',
    padding: 16,
    backgroundColor: '#FF7F00',
  },
  imageContainer: {
    marginBottom: 24,
    alignItems: 'center',
  },
  image: {
    width: 250,
    height: 150,
    borderRadius: 8,
  },
  caption: {
    marginTop: 8,
    fontSize: 26,
    color: '#333',
  },
  texto: {
    marginTop: 18,
    fontSize: 28,
    color: '#fff',
    marginBottom: 24,
    borderColor: '#fff',
    borderWidth: 2,
    width: '100%',
    textAlign: 'center',
  },
});