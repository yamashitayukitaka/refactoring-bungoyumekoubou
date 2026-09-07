import { defineConfig } from 'vite';
import { resolve } from 'node:path';

export default defineConfig({
  publicDir: false,
  build: {
    outDir: 'dist/js',
    emptyOutDir: false,
    minify: false,
    rollupOptions: {
      input: {
        common: resolve(import.meta.dirname, 'src/js/common.js'),
      },
      output: {
        entryFileNames: 'common.js',
        format: 'iife',
        name: 'wazeka',
      },
    },
  },
});
