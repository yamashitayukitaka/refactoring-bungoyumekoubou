import { defineConfig } from 'vite';
import { existsSync, readdirSync } from 'node:fs';
import { resolve } from 'node:path';

function addJsEntries(entries, dir) {
  if (!existsSync(dir)) {
    return;
  }

  const files = readdirSync(dir);

  for (let i = 0; i < files.length; i++) {
    const file = files[i];

    if (!file.endsWith('.js')) {
      continue;
    }

    const name = file.slice(0, -3);
    entries[name] = resolve(dir, file);
  }
}

export function getEntries() {
  const entries = {
    common: resolve(import.meta.dirname, 'src/js/common.js'),
  };

  addJsEntries(entries, resolve(import.meta.dirname, 'src/js/pages'));

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
