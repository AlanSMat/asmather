let genAnagrams = (input, wordlist) => {
  let anagrams = [];
  for (let i = 0; i < wordlist.length; i++) {
    if (wordlist[i].length === input.length) {
      for (j = 0; j < input.length; j++) {
        if (wordlist[i].indexOf(input.charAt(j))) {
          if (j === input.length - 1) {
            console.log(wordlist[i]);
          }
        }
      }
    }
    //console.log(input.charAt(i));
    // for (let j = 0; j < input.length; j++) {
    //   if (wordlist[i].length === input.length) {
    //     console.log(wordlist[j]);
    //   }
    // }
  }
};

const input = "ACRES";
const wordlist = [
  "EXAMS",
  "PLEX",
  "RACES",
  "AXELS",
  "MALES",
  "SCARE",
  "MEALS",
  "CARES",
  "AMPLE"
];

console.log(genAnagrams(input, wordlist));
