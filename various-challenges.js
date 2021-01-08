//
// Sum digits from a number
//
function addTwoDigits(n) {
    let sum = 0;
    nums = n.toString().split('').map(Number);
    
    for (var i = 0; i < nums.length; i++) {
        sum += nums[i];
    }
    
    return sum;
}


//
// Reverse setence
//
function reverseSentence(sentence) {
    return sentence.split(' ').reverse().join(' ');
}


//
// Found first not repeating char
//
function firstNotRepeatingCharacter(s) {
    for (let i = 0; i < s.length; i++) {
        var char = s[i];
        
        if (s.indexOf(char) == s.lastIndexOf(char)) {
            return char;
        }
    }

    return "_";
}


//
// Count pairs that sum a value
//
function countPairsWithSum(k, a) {
    let arrayClean = cleanArray(a);
    
    console.log(arrayClean);
    
    return "test";
}

function cleanArray(a) {
    let clean = [];
    
    a.forEach(e => {
       if (!clean.includes(e)) {
           clean.push(e);
       }
    });
    
    return clean;
}


//
// Queen of school with sort
//
function queenOfSchool(votes) {
    let votesCount = {};
    let maxVote = 0;
    let queen = '';
    
    votes.forEach(function(i) {
        votesCount[i] = (votesCount[i]||0) + 1;
    });
    
    /*votesCount.sort(function (a, b) {
        return a.localeCompare(b);
    });*/
    
    for (const [key, value] of Object.entries(votesCount)) {
        if (value >= maxVote) {
            maxVote = value;
            queen = key;
        }
    }
    
    return queen;
}
