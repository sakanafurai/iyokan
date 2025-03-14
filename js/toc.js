/**
 *    Table of Contents
 *
 *    Copyright (c) 2020 Kamochan https://cookbook88.com/
 *
 *    This software is released under the MIT License.
 *    http://opensource.org/licenses/mit-license.php
 */
{
  const TOC_INSERT_SELECTOR = '#toc';              // [セレクター指定] 目次を挿入する要素 querySelector用
  const HEADING_SELECTOR    = 'h2'; // [セレクター指定] 収集する見出し要素 querySelectorAll用
  const LINK_CLASS_NAME     = 'tocLink';           // [クラス名] 目次用aタグに追加するクラス名     .無し
  const ID_NAME             = 'heading';           // [ID名]    目次に追加するID名のプレフィックス #無し
  const tocInsertElement    = document.querySelector(TOC_INSERT_SELECTOR);
  const headingElements     = document.querySelectorAll(HEADING_SELECTOR);
  const layer = [];
  let id = 0;
  const uid   = () =>`${ID_NAME}${id++}`;
  let links = null;
  let oldRank = -1;
  try {
    const createLink = (el) => {
      let span = document.createElement('span');
      let li = document.createElement('li');
      let a  = document.createElement('a');
      el.id  = el.id || uid();
      a.href = `#${el.id}`;
      a.innerText = el.innerText;
      a.className = LINK_CLASS_NAME;
      li.appendChild(span);
      li.appendChild(a);
      return li;
    };
    const findParentElement = (layer, rank, diff) => {
      do {
        rank += diff;
        if (layer[rank]) return layer[rank];
      } while (0 < rank && rank < 7);
        return false;
    };
    const appendToc = (el, toc) => {
      el.appendChild(toc.cloneNode(true));
    };
    const tocHighlight = (e) => {
      const sy = window.pageYOffset;
      const ey = sy + document.documentElement.clientHeight;
      let tocHighlightEl = null;
      links.forEach( (el) => {
        const targetEl = document.querySelector(el.hash);
        const y = sy + targetEl.getBoundingClientRect().top ;
        el.classList.remove("active") ;
        if(sy < y &&  y < ey)tocHighlightEl = el;
        if(sy > y) tocHighlightEl = el;
      });
        if(tocHighlightEl)tocHighlightEl.classList.add("active");
    };
      headingElements.forEach( (el) => {
        let rank   = Number(el.tagName.substring(1));
        let parent = findParentElement(layer, rank, -1);
        if (oldRank > rank) layer.length = rank + 1;
        if (!layer[rank]) {
          layer[rank] = document.createElement('ol');
          if (parent.lastChild) parent.lastChild.appendChild(layer[rank]);
        }
        layer[rank].appendChild(createLink(el));
        oldRank = rank;
      });
      if (layer.length) appendToc(tocInsertElement, findParentElement(layer, 0, 1));
      links = document.querySelectorAll(`.${LINK_CLASS_NAME}`);
    links.forEach((el) => {
      el.addEventListener("click",(e)=>{
        const targetEl = document.querySelector(el.hash);
        scrollTo(0, window.pageYOffset + targetEl.getBoundingClientRect().top - 100);
        e.preventDefault();
        e.stopPropagation();
      });
    });
    tocHighlight();
    window.addEventListener("scroll", tocHighlight);
  } catch (e) {
    //error
  }
}
