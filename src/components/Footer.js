import React from 'react';
import styled from 'styled-components';
import FooterCol from './FooterCol';
import PText from './PText';

const FooterStyle = styled.div`
  background-color: var(--deep-dark);
  padding-top: 10rem;
  .container {
    display: flex;
    gap: 3rem;
  }
  .footer__col1 {
    flex: 2;
  }
  .footer__col2,
  .footer__col3,
  .footer__col4 {
    flex: 1;
  }
  .footer__col1__title {
    font-size: 3.5rem;
    margin-bottom: 1rem;
  }
  .copyright {
    background-color: var(--dark-bg);
    text-align: left;
    padding: 1rem 0;
    margin-top: 5rem;
    .para {
      margin-left: 0;
    }
  }
  @media only screen and (max-width: 768px) {
    .container {
      flex-direction: column;
      gap: 0rem;
      & > div {
        margin-top: 5rem;
      }
    }
    .footer__col1 .para {
      max-width: 100%;
    }
    .copyright {
      .container {
        div {
          margin-top: 0;
        }
      }
    }
  }
`;

export default function Footer() {
  return (
    <FooterStyle>
      <div className="container">
        <div className="footer__col1">
          <h1 className="footer__col1__title">Oduduabasi Isong</h1>
          <PText>
            A freelance web designer and developer from Akwa Ibom, Nigeria. I
            always make websites that have unique designs and also has a good
            performance rate.
          </PText>
        </div>
        <div className="footer__col3">
          <FooterCol
            heading="Contact Info"
            links={[
              {
                title: '+234 8026 52 7977',
                path: 'tel:+2348026527977',
              },
              {
                title: 'kellywizzyisong@gmail.com',
                path: 'mailto:kellywizzyisong@gmail.com',
              },
              {
                title: 'Akwa Ibom, Nigeria',
                path:
                  'https://www.google.com/maps/place/Uyo/@5.0215513,7.8593442,12z/data=!3m1!4b1!4m5!3m4!1s0x105d57c1f8da6a51:0xe71e33ab2276d451!8m2!3d5.0377396!4d7.9127945',
              },
            ]}
          />
        </div>
        <div className="footer__col4">
          <FooterCol
            heading="social Links"
            links={[
              {
                title: 'Facebook',
                path: 'http://facebook.com/kellywizzy.isong',
              },
              {
                title: 'Twitter',
                path: 'http://twitter.com/wf_kelly01',
              },
              {
                title: 'Instagram',
                path: 'http://isntagram.com/_kelly.dev',
              },
              {
                title: 'LinkedIn',
                path: 'https://www.linkedin.com/in/oduduabasi-isong-b8ba63188',
              },
              {
                title: 'GitHub',
                path: 'https://github.com/Oduduabasi99',
              },
            ]}
          />
        </div>
      </div>
    </FooterStyle>
  );
}
