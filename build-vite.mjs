import { fileURLToPath } from 'node:url';
import { build } from 'vite';
import { getEntries } from './vite.config.mjs';

const configFile = fileURLToPath(new URL('./vite.config.mjs', import.meta.url));
const watch = process.argv.includes('--watch');
const names = Object.keys(getEntries());

if (watch) {
  await Promise.all(
    names.map(function (name) {
      return build({
        configFile: configFile,
        mode: name,
        build: {
          watch: {},
        },
      });
    })
  );
} else {
  for (let i = 0; i < names.length; i++) {
    await build({
      configFile: configFile,
      mode: names[i],
    });
  }
}
