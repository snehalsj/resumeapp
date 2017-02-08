import { ResumeappPage } from './app.po';

describe('resumeapp App', function() {
  let page: ResumeappPage;

  beforeEach(() => {
    page = new ResumeappPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
