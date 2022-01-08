/* ---- Import NPM Modules --------- */
import pkg from '../package.json';

/* ---- Import Configs ------------- */
import { env } from './configs';
import { log } from './utils';

const title = String.raw`
              a          a
             aaa        aaa
            aaaaaaaaaaaaaaaa
           aaaaaaaaaaaaaaaaaa
          aaaaafaaaaaaafaaaaaa
          aaaaaaaaaaaaaaaaaaaa
           aaaaaaaaaaaaaaaaaa
            aaaaaaa  aaaaaaa
             aaaaaaaaaaaaaa
  a         aaaaaaaaaaaaaaaa
 aaa       aaaaaaaaaaaaaaaaaa
 aaa      aaaaaaaaaaaaaaaaaaaa
 aaa     aaaaaaaaaaaaaaaaaaaaaa
 aaa    aaaaaaaaaaaaaaaaaaaaaaaa
  aaa   aaaaaaaaaaaaaaaaaaaaaaaa
  aaa   aaaaaaaaaaaaaaaaaaaaaaaa
  aaa    aaaaaaaaaaaaaaaaaaaaaa
   aaa    aaaaaaaaaaaaaaaaaaaa
    aaaaaaaaaaaaaaaaaaaaaaaaaa
     aaaaaaaaaaaaaaaaaaaaaaaaa v${pkg.version}

`;

const msg = log.string(
  `
  ${title}
  Environment: '${log.string(env.toUpperCase(), 'yellow')}'
  `,
  'green',
);

console.log(msg);
