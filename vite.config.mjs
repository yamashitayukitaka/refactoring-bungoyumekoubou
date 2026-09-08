import { defineConfig } from 'vite';
import { readdirSync } from 'node:fs';
import { resolve } from 'node:path';

export function getEntries() {
  const entries = {
    common: resolve(import.meta.dirname, 'src/js/common.js'),
  };
  const pagesDir = resolve(import.meta.dirname, 'src/js/pages');
  const files = readdirSync(pagesDir);

  for (let i = 0; i < files.length; i++) {
    const file = files[i];

    if (!file.endsWith('.js')) {
      continue;
    }

    const name = file.slice(0, -3);
    entries[name] = resolve(pagesDir, file);
  }

  return entries;
}

export default defineConfig(function ({ mode }) {
  const entries = getEntries();
  const name = Object.prototype.hasOwnProperty.call(entries, mode) ? mode : 'common';

  return {
    publicDir: false,
    build: {
      outDir: 'dist/js',
      emptyOutDir: false,
      minify: false,
      rollupOptions: {
        input: {
          [name]: entries[name],
        },
        output: {
          entryFileNames: '[name].js',
          format: 'iife',
          name: 'wazeka',
        },
      },
    },
  };
});
