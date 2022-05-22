# Change Log

프로젝트의 변경 사항은 [Keep a Changelog](https://keepachangelog.com/ko/1.0.0/) 형식을 바탕으로 구성하였습니다.
현재 버전은 [#181](https://github.com/Hansanghyeon/4log/issues/181) 과 동일한 내용으로 구성됩니다.

## [v8.16.1] 2022-03-17

### Fixed

- 서비스에서 사용중인 도커이미지 명시
- VisitorCounter 구글 API 키변경

## [v8.16.0] 2022-01-03

### Added

- 2022-01-03
  - 포트폴리오 글 하단 이전글, 다음글 네비게이션 추가되가
- 2022-01-05
  - 포트폴리오 상세페이지 route 스크립트 추가
  - [[Featured] Image Light box · Issue #712 · Hansanghyeon/Hansanghyeon](https://github.com/Hansanghyeon/Hansanghyeon/issues/712)
- 2022-01-11
  - 기본폰트 Pretendard 변경
  - PR에 변경된 사항 diff tree 코멘트 액션 추가
- 2022-01-21
  - 포스트 마지막 업데이트 날짜 표시
- 2022-01-30
  - 페이지네이션에 앵커추가

### Changed

- 2022-01-03
  - 프로필 사용하는 스택 반영
  - 자기소개 워드프레스 컨텐츠로 마이그레이션
  - 경력표시 워드프레스 컨텐츠로 마이그레이션
- 2022-01-05
  - [CHANGELOG 오타 및 피드백 · Issue #727 · Hansanghyeon/Hansanghyeon](https://github.com/Hansanghyeon/Hansanghyeon/issues/727)
- 2022-01-11
  - `index.php` 내부의 폰트 wp 함수로 이전
  - toc의 목록이 비어있을때 ui가 보여지지 않게 수정
- 2022-01-31
  - 포트폴리오 카테고리(브랜드) 링크 적용

### Refactoring

- 2022-01-31
  - [[Refactoring] Post Category 로직변경 · Issue #729 · Hansanghyeon/Hansanghyeon](https://github.com/Hansanghyeon/Hansanghyeon/issues/729)

### Fixed

- 2022-01-03
  - 이전글, 다음글 네비게이션 아이콘 CDN오류 아이콘추가로 해결

### Removed

- 2022-01-03
  - 리메이크, 삭제된 홈페이지 게시하지 않는 알림 ui 제거 (피드백 반영)

## [v8.15.0] 2022-01-03

### Added

- 포트폴리오 추가 [[Feature] 포트폴리오 · Issue #716 · Hansanghyeon/Hansanghyeon](https://github.com/Hansanghyeon/Hansanghyeon/issues/716)
- lottie 비주얼요소 추가 테스트

### Fixed

- window에서 d2coding CDN 불량

### Changed

-  `resources/[image|script|styles]` 폴더구조에서 `resources/assets/**/*` assets 폴더 구조로 변경
-  history ui 다크모드 스타일추가
-  react-app 아이디값 고유명으로 사용하기 부적절 고유 아이디값으로 추가
  
### Removed

- jit 설정 변수 제거

## [v8.14.0] 2021-12-29

### Added

- history페이지에 CHANGELOG 추가 [[Feature] CHANGELOG · Issue #717 · Hansanghyeon/Hansanghyeon](https://github.com/Hansanghyeon/Hansanghyeon/issues/717)

### Changed

- tailwind.config.js colors로인해 코드 가독성 저해를 일으킴 해당 colors config 폴더로 분리
- 자주사용하는 position center를 컴포넌트로 tailwind.config.js 정의추가
- history - changelog의 current version 스타일 변경

## [v8.13.10] 2021-12-29

### Changed

- remark42 서비스 운용 replybox제거
- (refactering) Routes를 Routes/index로 관리 변경
- tailwindcss container 중앙정렬 기본값으로 변경
- CHANGELOG 제목 포맷 싱크

## [v8.13.9] 2021-12-19

### Changed

- footer에 적용하는 js 제거
- (BE) pre 코드의 배경이 흰색이라 구분이 안되서 색상 적용

### Fixed

- 워드프레스 기본 언어 en으로 변경
  - content의 `get_the_date()`가 영어로 출력되는 문제 해결
  - Carbon으로 date의 값을 한국으로 출력 변경
- 메인페이지 각각의 아카이브 메뉴버튼이 `flex-wrap` 속성이 없어 가로 스트롤리 생기는 문제 해결

## [v8.13.8] 2021-12-14

### Changed

- fontawesome 제거 - fontello 변경
- profile neon alert 토글 기능 추가

## [v8.13.7] 2021-12-14

### Removed

- dev 저장소 이전 dev 폴더 제거

### Changed

- 플래너 아카이브 추가

## [v8.13.6] 2021-12-02 wip2

### Changed

- [재수정] wp 모바일에서는 상단 고정형 nav가 아닌 스타일 코드 수정
- Root Font size 설정
- Root font size 설정에 대한 포스트 영역 패딩 설정

## [v8.13.5] 2021-12-02

### Changed

- Pagination prev, next 버튼 제거, 넘버 중앙정렬
- Container의 기본 패딩설정, 기존 설정된 패딩클래스 제거
- wp 모바일에서는 상단 고정형 nav가 아닌 스타일 코드 수정

## [v8.13.4] 2021-12-01

### Added

- dev 버전의 워드프레스

### Fixed

- styelint error
- 몇년 몇달 몇일째 ui가 캐싱모드로 진입할때 재대로 보여지지않는문제 때문에 php로 값을 넘겨받고 js로 오버라이드하는 방식으로 구성

## [v8.13.3] 2021-12-01

### Added

- 404페이지 & 404 컴포넌트

### fixed

- Archive tag & category가 없는 archive 예외처리
- sns share 어드민용 ui 오류

## [v8.13.2] 2021-11-30

### Changed

- tags 폰트 굵기 semibold
- list notion의 scale 옵션 스타일 수정

## [v8.13.1] 2021-11-29

### Changed

- 포스트의 여백 조절

### Remove

- wp function 파일 중 일부 워드프레스 관리자 대쉬보드에서 관리하게 변경

### Add

- code block title style

## [v8.13.0] 2021-11-19

- #689

### Changed

- Point color 추가 & 변경
- 타이틀에 적용하던 나눔스퀘어 폰트제거
- FontAwesome 스크립트 프로필에서만 사용하게 변경
- Admin dashboard에 적용하던 커스텀 워드프레스 함수들 제거

### Added

- tailwind clamp 플러그인 추가

## [v8.12.3] 2021-11-18

### Changed

- style 깃허브 스트일로 border round, background color 등등 변경
- Share 컴포넌트의 기본 meta 이미지변경

## [v8.12.2] 2021-11-16

### Changed

- jit!!
- github deploy action 메뉴얼 버튼으로만 작동하게 변경

### Fixed

- docker host url 오류

## [v8.12.1] 2021-11-10

### Changed

- `app.scss` tailwindcss css 임포트

### Added

- `@tailwindcss/jit` 패키지 설치 적용

## [v8.12.0] 2021-11-09

### Changed

- package manager version yarn v2 berry로 변경
- yarn v2 berry github action 적용

## [v8.11.2] 2021-10-28

### Fixed

- Visicoounter php GCP 클라우드 에러 처리

## [v8.11.1] 2021-10-28

### Changed

- github action의 변수화 필요한 것들 변수화하고 `*.blade.php` 업데이트에도 build가 필요해서 static과 build로 나눈 action을 통합

## [v8.11.0] 2021-10-28

### Chagned

- JIT모드 반영
- pre 폰트 스타일로 인하여 폰트 사이즈가 커보이므로 폰트 크기 변경
- 고유 방문자 측정을 위해 VisitorCounter의 visitor를 ga:users로 변경

## [v8.10.8] 2021-10-21

### Fixed

- `.wordpress` 폴더가 없어지면서 wp-config 환경변수를 docker-compose에서 넣어야하는 것으로 수정

## [v8.10.7] 2021-10-21

### Added

- github action test release 브랜치 따로 구성 메뉴얼 버튼도 추가

### Fixed

- tailwind config error

## [v8.10.6] 2021-10-21

### Added

- pre fonts

### Changed

- jit 모드 제거

## [v8.10.5] 2021-10-21

### Fixed

- github action if문 제거

## [v8.10.4] 2021-10-21

### Changed

- github action의 종류를 변경

### Added

- github action
  - 메뉴얼 배포
  - `*.blade.php` 소스코드만 git pull
  - release 브랜치 test git pull
  - `*/styles/*.scss` `*/scripts/*.js` build 후 빌드 파일 업로드 배포

## [v8.10.3] 2021-10-21

[#701](https://github.com/Hansanghyeon/Hansanghyeon/issues/701) 
[#705](https://github.com/Hansanghyeon/Hansanghyeon/issues/705) 

### Added

- pre wrap `whitespace-pre-wrap` 코드를 통해 등록 가능하게
- pre syntax code block 플러그인에서 등록한 border 제거
- 시리즈 archive 페이지 대응 & 디스크립션 숏코드 실행가능하게 구성

### Changed

- taxonomy에 글리 없을때 나오는 레이아웃이 깨져있음 헤더부분과 동일한 레이아웃이 아님 이 것 수정

## [v8.10.2] 2021-10-10

### Changed

- safari에서는 계속 오류가 생김 수정 https://github.com/Hansanghyeon/Hansanghyeon/issues/698#issuecomment-938500958

## [v8.10.1] 2021-10-09

### Changed

- css 코드블럭에 대한 선택자 우선순위 플러그인에 밀림 우선순위 높임

## [v8.10.0] 2021-10-09

### Changed

- [syntax-highlighting-code-block](https://wordpress.org/plugins/syntax-highlighting-code-block/) 플러그인에서 [code-syntax-block](https://github.com/mkaz/code-syntax-block)으로 변경
- autoprefix를 추가

## [v8.9.2] 2021-10-09

### Removed

- Admin custom css

## [v8.9.1] 2021-10-08

### Changed

- wordpress docker image를 오피셜이미지의 php 익스텐션을 추가한 wordpress & redis 이미지로 변경하였다.
  - 해당 docker 이미지 참고 https://github.com/Hansanghyeon/wordpress-redis

## [v8.9.0] 2021-10-07

### Added

- taxonomy ACF `icon_full_cover` 이름으로 아이콘 스케일업 옵션추가
- tailwind css
  - plugin중 aspect-ratio 플러그인 추가
  - px 함수를 통해 padding px token 추가
## [v8.8.2] 2021-09-21

### Changed

- tailwind의 typography의 기본색상이 적용되서 dark모드에서 검은 색상으로 출력되는 것들을 환결설정에서 모두 제거
  - strong
  - blockquote

## [v8.8.1] 2021-09-15

### Added

- Alpinejs x-cloak 필수 스타일코드 추가

## [v8.8.0] 2021-09-15

### Added

- TAG taxnomy #695

## [v8.7.0] 2021-09-14

prod의 폴더구조를 변경해야하고 데이터 이전으로인해서 중간단계 버전업

### Added

- docker redis
- wordpress volume

### Changed

- `.wordpress` docker volume 폴더를 제거 `content` 폴더로 마이그레이션

## [v8.6.4] 2021-09-12

### Added

- release git flow 자동화 스크립트 추가

### Fixed

- `docker-compose.yaml` 볼륨 바인딩 path 오류 `../` > `./`

## [v8.6.3] 2021-09-12

### Added

- Nav - side 최소 넓이 지정
- Post prose의 wordpress gallery 블럭의 ul 태그에서 기본 list style 제거 css 오버라이드
## [v8.6.2] 2021-09-06

### Changed

- [Navigation - side v1.2](https://github.com/Hansanghyeon/Hansanghyeon/discussions/685)

## [v8.6.1] 2021-08-23

### fixed

- `시스템에 영향은 없음` 소스코드 업데이트 `prod-deploy.yml`에서 `jobs:source`에서 프로젝트 파일로 이동하는 스크립트가 타이핑되어있는 것을 환경변수로 변경

## [v8.6.0] 2021-08-22

### Added

- [github action] 소스파일 린트 테스트
- [github action] 할일 브랜치 자동 PR만들기
- [github action] hyeonServer720p 라이브 서버에 Theme의 build 파일 만들고 해당 파일 rsync로 업데이트

### Changed

- 아카이브 네비게이션 active 스타일(보더 색상) 변경

## [v8.5.2] 2021-08-19

### Added

- 워드프레스의 READ MORE라해서 exceprt를 포스트 내부에서 지정하게 도와주는 블럭의 스타일을 지정

- 워드프레스의 readmore라는
## [v8.5.1] 2021-08-18

### Fixed

- composer/Post.php 파일의 `get_menu()` 함수가 404 페이지에서 구할수없기 때문에 html이 로드되지 않는문제 404 페이지 if 분기로 수정

## [v8.5.0] 2021-08-18

### Added

- wp 어드민 대쉬보드에서 user 탭에보면 어떤 포스트의 몇개의 글을 작성했는지 볼 수 있는데 custom post type에 관한 카운트는 나와있지 않다. 이것을 추가!
- tailwind css를 사용하면서 scss 내부에서 `@apply`라는 문법을 사용하는데 이 문법이 vscode에는 기본값으로 나와있는 것이 없어서 따로 커스텀으로 설명을 추가
  SNS리스트에서 codepen 추가

### Chagned

- author/hansanghyeon 커스텀 페이지에서 alert의 라벨이 정렬을 중앙으로 변경하였다.

## [v8.4.0] 2021-08-15

### Added

- Archive 페이지에서 pagination을 추가

### Fixed

- dev 포스트타입에서 project라는 카테고리의 포스트가 오류를 일으킴 해당 카테고리를 제거 (WordPress에서만)

## [v8.3.0] 2021-08-11

UI와 composer의 기능이 추가되어서 version 8.3.0으로 명명

### Added

- breadcrumbs의 기능을 Post header에 추가
  `composer/Post.php`에서 menu 함수로 breadcrumbs 데이터가져오게 구성

### Fixed

- 포스트타입이 page인 것에 `composer/Post.php`에서 page-header의 view로 가져오게되어있어서 포스트의 데이터를 가져오는 함수에서 오류가났음
  - categories
  - archive, menu
### Changed

- `page.blade.php` 내부의 prose 부분을 max-width제거 wrap으로 container로 되게 설정

## [v8.2.1] 2021-08-11

### Fixed

- `composer/Archive.php`에서 category 데이터를 넘길때 링크가 `term->name`으로 되어있던 것을 `term->slug`으로 변경

### Added

- post main에서 divider border-bottom이 기본값으로 설정된것 제거
- strong 태그 color: null
## [v8.2.0] 2021-08-07

### Added

- Blog, Dev 아카이브페이지에서 카테고리 리스트 추가

### Chagned

- scss에서 `_*.scs` 이런식으로 partials로 나눌때 하위 파일이름을
  `index.scss`에서

  ```diff
  # index.scss
  .list {
  -  &-sub {
  -    @import 'sub';
  -  }
  +  @import 'sub';
  }

  # sub.scss
  - & {
  + &-sub {
    // sub.scss style code
  }
  ```

  작성하던것을 `sub.scss`에서 작성하도록 변경

- Notion list를 component > composer로 변경
  component는 어떤 곳에 같혀있지않고 모든곳에서 사용할 수 있도록 해야하는데 데이터를 종속성으로 받아야함으로 컴포넌트에서 조건부로 데이터를 호출하기 애매해서 특정 템플릿에서 사용하려고 composer로 변경

## [v8.1.0] 2021-08-01

- Google client 패키지를 활용해서 today 위젯 구현 #118

## [v8.0.0] 2021-07-31

### Changed

- roots/sage 10버전으로 `dev`이지만 모두 변경
  - #659

## [v7.1.0-2w] 2021-05-30

### Added

- CHANGELOG.md 다시 작성하기 시작!

### Chagned

- SNS Share UI를 css로 숨김처리하였었다.<br/>
  그래서 php 조건문을 통해서 에디터와 관리자만 보이게 수정

## [v7.1.0-1w] 2021-05-29

#641

### Added

- SNS 공유기능 추가 (카카오톡)<br/>
  관리자일때 모든 페이지를 공유할 수 있도록 admin sns share UI를 제작함
- docker-compose dev 모드 prod 모드 파일추가
- workspace 추가

### Changed

- css root (light)<br/>
  라이트모드의 누런느낌의 색상을 변경
- loader 페이드아웃 타이밍 수정
- `a:visited` 색상 수정

## [v7.0.0] 2021-06-09

[roots/sage: WordPress starter theme with a modern development workflow](https://github.com/roots/sage)를 사용해서 워드프레스 laravel를 활용한 커스텀 테마 제작

모든 react components, page를 전부 `*.blade.php` 코드로 변경

## [v5.15.0 ... v6.0.0] 9999-99-99

체인지 로그를 재대로 남기지 못함 😭

## [v5.14.3] 2020-10-12

### Changed

- Notion List style 컴포넌트를 bit으로 관리이전

## [v5.14.2] 2020-10-12

### Removed

- Project Page 프로젝트를 개인 이력으로 이전을 위해서 제거

## [v5.14.1] 2020-10-10

### Changed

- 메뉴버튼 `MenuBtn`의 Redux에서 전달하는 dispatch 액션을 isActive 값을통해서 함수실행여부 분기

## [v5.14.0] 2020-09-12

### Added

- 'gatsby-plugin-sitemap` 추가
- 404 페이지 애니메이션 추가

### Changed

- `@fortawesome/*` 패키지는 `react-icons`로 변경 사용하기 매우 편리하다.

### Fixed

- 코드블럭에서 마지막 라인의 코드에 번호가 붙어서 나오는 거 수정
- 워드프레스 코드에서 이미지의 높이를 지정해서 불러오는거 스타일 수정

## [v5.13.1] 2020-09-11

### Fixed

- #392 코드블럭 태그찾는 정규식 수정으로 오류 해결

## [v5.13.0] 2020-09-10

### Added

- Lottie 애니메이션중 [UnderMaintenance](https://lottiefiles.com/6873-under-maintenance) 추가

### Changed

- Theme Color 눈에 보기 편하게 색조정
- About Page에서 푸터사라지는 것 수정 푸터사라지지 않게

## [v5.12.0] 2020-09-10

### Added

- About Page 추가

### Changed

- About Page Redux 상태 적용
- 패키지 최신화
- react-hook에 맞게 타입들 변경

## [v5.11.0] 2020-08-14

### Changed

- project 임시 페이지 완료 더이상 아이디어가 없어서 진행하지 못함
- Redux 레이아웃 타입 추가

## [v5.10.3] 2020-08-09

### Fixed

- `html-react-parser` 패키지가 코드블럭의 string으로 표현되어야할 태그들까지 모두 html tag로 변경해주는 것을 `parser`를 사용할때 `options`에다가 원본 string값을 넘겨서 노출되지않던 부분까지 모두 보이게 수정

## [v5.10.2] 2020-07-05

### Fixed

- `wp-graphql` 플러그인 업데이트로 `mediaItemUrl` 쿼리가 node로 구분되어서 여러개 구성할수있게 변경되었다. 이부분을 반영해서 오류 나던부분 제거

## [v5.10.1] 2020-06-24

### Fixed

- 모든 카테고리가 페이지로 만들어지지 않는 오류 수정
  - 이유는 기본적으로 GraphQL이 가져오는 갯수가 10개라서 이부분을 임의적으로 9999개로 변경시킴

### Changed

- `Row, Col`의 기본값을 객체화시켜서 내보낼때 `def`, `menu`와 같이 소문자로 작성했는데 이부분이 `eslint` 룰에 어긋나서 이 부분 수정

## [v5.10.0] 2020-06-09

### Add

- `useOutsideAlerter` `ref`로 설정된 컴포넌트 외부 클릭시 받은 함수 실행하도록하는 커스텀 훅 제작

### Changed

- `Layout` > `MSB`와 메인을 감싸고있던 wrap구조를 변경
- `Layout` > `layout.tsx` 에서 폴더로 구조변경하고 스타일 파일 따로 생성 연결
- `MSB` HTML 돔순서를 변경해서 디바이스 중간사이즈에서도 `position: fixed`로 고정
  - `GNB` MSB의 상태에따라 스타일추가 - Redux 상태사용
  - `Layout > Main` MBS의 상태에 따라 스타일 추가 - Redux 상태사용

## [v5.9.0] 2020-06-07

### Changed

- `SeoPreview` 컴포넌트의 포스트의 스타일 속성인 `text-decation`이 적용되는 것을 예외처리(제거)

## [v5.8.4] 2020-06-07

### Fixed

- `CardWrap` 첫번째 헤딩요소의 `margin-top` 스타일 제거

## [v5.8.3] 2020-06-06

### Fixed

- `TOC` revoke refactor...

## [v5.8.2] 2020-06-06

### Fixed

- `MSB` 스타일 코드 누락부분 추가

## [v5.8.1] 2020-06-06

### Changed

- [#181](https://github.com/Hansanghyeon/4log/issues/181) ~~[Semantic Versioning](https://semver.org/lang/ko/)~~ 프로젝트룰을 제거 독자적 버저닝으로 변경

## [v5.8.0] 2020-06-02

### Add

- [#88](https://github.com/Hansanghyeon/4log/issues/88) 모바일 메뉴관련 버튼 추가 이전에는 모바일 md =< 786 사이즈 이하로 떨어질때 카테고리 메뉴를 완전 제거했는데 버튼을 통한 메뉴 보기 기능을 가하였다. `react-redux`를 활용 나중에 offset 밖영역 클릭도 리듀서를 통한 간단하게 기능추가가 가능함

## [v5.7.0] 2020-06-01

### Add

- [#172](https://github.com/Hansanghyeon/4log/issues/172) 4log 저장소에 적용한 코드에 대한 라이센스 적용

### Changed

- https://github.com/Hansanghyeon/4log/pull/169#issuecomment-636887973 `gh-pages` 제거
- `Theme`관련 타입을 분리하지 않고 한곳으로 구성 코드양이 작아서

## [v5.6.0] 2020-05-30

### Add

- [#160](https://github.com/Hansanghyeon/4log/issues/167) 파일 다운로드 버튼 추가

## [v5.5.1] 2020-05-22

### Fixed

- [#160](https://github.com/Hansanghyeon/4log/issues/160) BMC 컴포넌트 모바일일때 시각적으로 너무 붙어있는 부분 수정
- Grid system에서 브레이크 포인트가 미디어에 딱맞게 되어있어서 1px씩 올림

## [v5.5.0] 2020-05-20

### Fixed

- [#156](https://github.com/Hansanghyeon/4log/issues/156) `styled-bootstrap-grid`에서 미디어쿼리에관한 코드가 있는지 모르고 scss에서 자주 사용하던 respond-to 기능을 만들어서 사용하던것을 제거하고 모듈로 사용할수있는 미디어타입으로 전부 교체

## [v5.4.0] 2020-05-20

### Add

- [#114](https://github.com/Hansanghyeon/4log/issues/114) 바이오섹션에 Buy me a coffee 버튼 추가

## [v5.3.0] 2020-05-17

### Add

- [#116](https://github.com/Hansanghyeon/4log/issues/116) 포스트페이지에서 시리즈관련 포스트들에 관한 컴포넌트를 추가

### Fixed

- AniLink 플러그인 인자 스펠링오타 수정


## [v5.2.4] 2020-05-14

### Changed

- [#148](https://github.com/Hansanghyeon/4log/issues/148) 메인페이지 그리드뷰가 부적합하게 레이아웃이 짜여진다. div가 일렬로 느려트려놓은 dom tree여서 일렬중에 한 DOM element만 높이가 높아지면 부적합한 그리드 레이아웃이 형성되는 스타일 수정

## [v5.2.3] 2020-05-14

### Refactoring

- Ditto 컴포넌트 Scss -> styled-components로만 구성하게 변경

## [v5.2.2] 2020-05-13

### Changed

- 모바일 적용 스타일 코드 모바일에서 제외 되었던 것 다시 추가 기본값으로

### Fixed

- Grid 시스템에서 media query 기능을 분리 기존에 sass에서 유용하게 사용하던 respond-to 함수를 ts로 구현했던 것 제거하고 query를 그냥 타이핑 적용

## [v5.2.1] 2020-05-11

### Changed

- 메인 코딩테스트 포스트 제외

### Fixed

- [#138](https://github.com/Hansanghyeon/4log/issues/138) 모바일에서 스크롤 허용하게 수정

## [v5.2.0] 2020-05-10

### Added

- [#141](https://github.com/Hansanghyeon/4log/issues/141) 코드블럭 라인넘버

### Changed

- 워드프레스 기본 블럭정렬 클래스값 스타일 적용
- 인라인 코드블럭 `white-psace: pre`관련 수정
- 코드블럭 언어타입없으면 인라인 코드블럭으로 취급에러 수정

## [v5.1.0] 2020-05-09

### Added

- [#124](https://github.com/Hansanghyeon/4log/issues/124) 코드블럭
  - 파일이름이 있으면 표시
  - 코드언어 대표 Material 아이콘으로 표시

### Changed

- Eslint rule: `*.style.tsx` 파일의 export default 규칙 제거