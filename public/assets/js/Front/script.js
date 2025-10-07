// const packageCarousel = document.getElementById("packageCarousel");

// if (packageCarousel) {
//   let intervalTime = 3000;
//   let carousel = new bootstrap.Carousel(packageCarousel, {
//     interval: intervalTime,
//     ride: "carousel",
//     smartSpeed: "800",
//     item: "1",
//     pause: false,
//   });
// }
document.addEventListener("DOMContentLoaded", function () {
  const packageCarousel = document.getElementById("packageCarousel");

  if (packageCarousel) {
    packageCarousel.addEventListener("mouseenter", () => {
      const carouselInstance = bootstrap.Carousel.getInstance(packageCarousel);
      if (carouselInstance) {
        carouselInstance.pause();
      }
    });

    packageCarousel.addEventListener("mouseleave", () => {
      const carouselInstance = bootstrap.Carousel.getInstance(packageCarousel);
      if (carouselInstance) {
        carouselInstance.cycle();
      }
    });
  }
});
document.addEventListener("DOMContentLoaded", function () {
  const track = document.querySelector(".custom-carousel-track");
  const cards = Array.from(track.children);
  const nextButton = document.getElementById("nextBtn");
  const prevButton = document.getElementById("prevBtn");

  if (!track || cards.length === 0) {
    console.error("Carousel track or cards not found!");
    return;
  }

  const cardMarginRight = parseFloat(
    window.getComputedStyle(cards[0]).marginRight
  );
  const cardWidth = cards[0].offsetWidth + cardMarginRight;
  let currentIndex = 0;
  let isTransitioning = false;
  const autoPlayInterval = 4000; // ms
  let autoPlayTimer;

  // Clone cards for infinite loop effect
  // Clone enough cards to fill the viewport at the beginning and end
  // For simplicity, cloning all cards once is usually sufficient
  cards.forEach((card) => {
    const clone = card.cloneNode(true);
    track.appendChild(clone);
  });

  const allCardsInTrack = Array.from(track.children); // Re-evaluate after cloning

  function updateCarousel() {
    if (isTransitioning) return;
    isTransitioning = true;

    track.style.transition = "transform 0.7s ease-in-out";
    track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;

    // Listen for transition end to handle looping
    track.addEventListener(
      "transitionend",
      () => {
        isTransitioning = false;
        // If we've slid past the original set of cards
        if (currentIndex >= cards.length) {
          currentIndex = 0; // Reset to the start of the original cards
          track.style.transition = "none"; // Disable transition for immediate jump
          track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
          // Force reflow to apply the transform immediately
          track.offsetHeight; // eslint-disable-line no-unused-expressions
          track.style.transition = "transform 0.7s ease-in-out"; // Re-enable transition
        } else if (currentIndex < 0) {
          // For previous button (optional advanced feature)
          currentIndex = cards.length - 1; // Go to the equivalent card in the cloned set (or original)
          track.style.transition = "none";
          track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
          track.offsetHeight; // eslint-disable-line no-unused-expressions
          track.style.transition = "transform 0.7s ease-in-out";
        }
      },
      { once: true }
    ); // Important: Use { once: true }
  }

  function moveToNext() {
    if (isTransitioning) return;
    currentIndex++;
    updateCarousel();
    resetAutoPlay();
  }

  function moveToPrev() {
    if (isTransitioning) return;
    // If at the beginning of visible items, need to jump to cloned items at the end to slide smoothly
    if (currentIndex === 0) {
      currentIndex = cards.length; // Go to the start of the cloned set
      track.style.transition = "none";
      track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
      track.offsetHeight; // Force reflow
      // Small timeout to ensure the jump is processed before the animated slide
      setTimeout(() => {
        currentIndex--;
        updateCarousel();
      }, 20); // A very small delay
    } else {
      currentIndex--;
      updateCarousel();
    }
    resetAutoPlay();
  }

  nextButton.addEventListener("click", moveToNext);
  prevButton.addEventListener("click", moveToPrev);

  function startAutoPlay() {
    stopAutoPlay(); // Clear existing timer
    autoPlayTimer = setInterval(moveToNext, autoPlayInterval);
  }

  function stopAutoPlay() {
    clearInterval(autoPlayTimer);
  }

  function resetAutoPlay() {
    stopAutoPlay();
    startAutoPlay();
  }

  // Initial setup
  // Optional: If you want to start at a specific card or have pre-clones for prev button
  // track.style.transform = `translateX(0px)`; // Start at the beginning

  startAutoPlay();

  // Pause autoplay on hover (optional)
  const carouselViewport = document.querySelector(".custom-carousel-viewport");
  if (carouselViewport) {
    carouselViewport.addEventListener("mouseenter", stopAutoPlay);
    carouselViewport.addEventListener("mouseleave", startAutoPlay);
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const track = document.querySelector(".custom-carousel-track");
  const cards = Array.from(track.children);
  const nextButton = document.getElementById("nextBtn");
  const prevButton = document.getElementById("prevBtn");

  if (!track || cards.length === 0) {
    console.error("Carousel track or cards not found!");
    return;
  }

  const cardMarginRight = parseFloat(
    window.getComputedStyle(cards[0]).marginRight
  );
  const cardWidth = cards[0].offsetWidth + cardMarginRight;
  let currentIndex = 0;
  let isTransitioning = false;
  const autoPlayInterval = 4000; // ms
  let autoPlayTimer;

  // Clone cards for infinite loop effect
  // Clone enough cards to fill the viewport at the beginning and end
  // For simplicity, cloning all cards once is usually sufficient
  cards.forEach((card) => {
    const clone = card.cloneNode(true);
    track.appendChild(clone);
  });

  const allCardsInTrack = Array.from(track.children); // Re-evaluate after cloning

  function updateCarousel() {
    if (isTransitioning) return;
    isTransitioning = true;

    track.style.transition = "transform 0.7s ease-in-out";
    track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;

    // Listen for transition end to handle looping
    track.addEventListener(
      "transitionend",
      () => {
        isTransitioning = false;
        // If we've slid past the original set of cards
        if (currentIndex >= cards.length) {
          currentIndex = 0; // Reset to the start of the original cards
          track.style.transition = "none"; // Disable transition for immediate jump
          track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
          // Force reflow to apply the transform immediately
          track.offsetHeight; // eslint-disable-line no-unused-expressions
          track.style.transition = "transform 0.7s ease-in-out"; // Re-enable transition
        } else if (currentIndex < 0) {
          // For previous button (optional advanced feature)
          currentIndex = cards.length - 1; // Go to the equivalent card in the cloned set (or original)
          track.style.transition = "none";
          track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
          track.offsetHeight; // eslint-disable-line no-unused-expressions
          track.style.transition = "transform 0.7s ease-in-out";
        }
      },
      { once: true }
    ); // Important: Use { once: true }
  }

  function moveToNext() {
    if (isTransitioning) return;
    currentIndex++;
    updateCarousel();
    resetAutoPlay();
  }

  function moveToPrev() {
    if (isTransitioning) return;
    // If at the beginning of visible items, need to jump to cloned items at the end to slide smoothly
    if (currentIndex === 0) {
      currentIndex = cards.length; // Go to the start of the cloned set
      track.style.transition = "none";
      track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
      track.offsetHeight; // Force reflow
      // Small timeout to ensure the jump is processed before the animated slide
      setTimeout(() => {
        currentIndex--;
        updateCarousel();
      }, 20); // A very small delay
    } else {
      currentIndex--;
      updateCarousel();
    }
    resetAutoPlay();
  }

  nextButton.addEventListener("click", moveToNext);
  prevButton.addEventListener("click", moveToPrev);

  function startAutoPlay() {
    stopAutoPlay(); // Clear existing timer
    autoPlayTimer = setInterval(moveToNext, autoPlayInterval);
  }

  function stopAutoPlay() {
    clearInterval(autoPlayTimer);
  }

  function resetAutoPlay() {
    stopAutoPlay();
    startAutoPlay();
  }

  // Initial setup
  // Optional: If you want to start at a specific card or have pre-clones for prev button
  // track.style.transform = `translateX(0px)`; // Start at the beginning

  startAutoPlay();

  // Pause autoplay on hover (optional)
  const carouselViewport = document.querySelector(".custom-carousel-viewport");
  if (carouselViewport) {
    carouselViewport.addEventListener("mouseenter", stopAutoPlay);
    carouselViewport.addEventListener("mouseleave", startAutoPlay);
  }
});

function initializeCustomCarousel(
  carouselId,
  trackId,
  prevBtnId,
  nextBtnId,
  itemClass
) {
  const carouselElement = document.getElementById(carouselId);
  if (!carouselElement) {
    // console.warn(`Carousel with ID "${carouselId}" not found. Skipping initialization.`);
    return;
  }

  const track = document.getElementById(trackId);
  const nextButton = document.getElementById(nextBtnId);
  const prevButton = document.getElementById(prevBtnId);
  const viewport = carouselElement.querySelector(".custom-carousel-viewport");

  if (!track || !nextButton || !prevButton || !viewport) {
    console.error("Carousel elements not found for ID:", carouselId);
    return;
  }

  let originalCards = Array.from(track.children).filter((child) =>
    child.classList.contains(itemClass)
  );
  if (originalCards.length === 0) {
    // console.warn(`No items with class "${itemClass}" found in track "${trackId}". Carousel may not work.`);
    return;
  }

  let cardStyle = window.getComputedStyle(originalCards[0]);
  let cardMarginRight = parseFloat(cardStyle.marginRight);
  let cardWidth = originalCards[0].offsetWidth + cardMarginRight;

  let currentIndex = 0;
  let isTransitioning = false;
  const autoPlayInterval = 4500; // Slightly different interval for variety
  let autoPlayTimer;

  // Clone cards for infinite loop effect
  originalCards.forEach((card) => {
    const clone = card.cloneNode(true);
    track.appendChild(clone);
  });

  // Recalculate cardWidth AFTER cloning and potential reflow, ensure it's based on an original card.
  // This helps if cards might resize slightly on first render or after styles fully apply.
  // It's generally safer to get dimensions after the DOM is stable.
  if (originalCards.length > 0) {
    cardStyle = window.getComputedStyle(originalCards[0]);
    cardMarginRight = parseFloat(cardStyle.marginRight) || 0; // Ensure it's a number
    cardWidth = originalCards[0].offsetWidth + cardMarginRight;
  }

  function updateCarouselPosition(animate = true) {
    if (isTransitioning && animate) return; // Prevent transition overlap only if animating
    if (animate) isTransitioning = true;

    track.style.transition = animate ? "transform 0.7s ease-in-out" : "none";
    track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;

    if (!animate) {
      // If not animating (a jump), reset transitioning state immediately
      isTransitioning = false;
    }
  }

  track.addEventListener("transitionend", () => {
    isTransitioning = false;
    if (currentIndex >= originalCards.length) {
      currentIndex = 0;
      updateCarouselPosition(false); // Jump without animation
    } else if (currentIndex < 0) {
      // This case is for prev button when at the very beginning, handled in moveToPrev
    }
  });

  function moveToNext() {
    if (isTransitioning) return;
    currentIndex++;
    updateCarouselPosition();
    resetAutoPlay();
  }

  function moveToPrev() {
    if (isTransitioning) return;
    if (currentIndex === 0) {
      // Jump to the end of the "cloned" section that mirrors the start
      currentIndex = originalCards.length;
      updateCarouselPosition(false); // Jump without animation

      // Must force a reflow for the browser to register the non-animated jump
      // before applying the animated slide back.
      track.offsetHeight;

      // Then, after the jump, set to the actual previous visual slide and animate
      currentIndex--;
      // Small timeout helps ensure the non-animated jump completes visually
      // before the animated transition starts.
      setTimeout(() => {
        updateCarouselPosition();
      }, 20);
    } else {
      currentIndex--;
      updateCarouselPosition();
    }
    resetAutoPlay();
  }

  nextButton.addEventListener("click", moveToNext);
  prevButton.addEventListener("click", moveToPrev);

  function startAutoPlay() {
    stopAutoPlay();
    if (originalCards.length > 0 && cardWidth > 0) {
      // Only start if there are cards and valid width
      autoPlayTimer = setInterval(moveToNext, autoPlayInterval);
    }
  }

  function stopAutoPlay() {
    clearInterval(autoPlayTimer);
  }

  function resetAutoPlay() {
    stopAutoPlay();
    startAutoPlay();
  }

  // Initial setup
  if (originalCards.length > 0 && cardWidth > 0) {
    // Check if cardWidth is valid
    updateCarouselPosition(false); // Set initial position without animation
    startAutoPlay();
  } else if (originalCards.length > 0) {
    // console.warn("Card width is 0, autoplay not started for carousel:", carouselId);
    // Attempt to get width again after a short delay if it was 0 initially
    setTimeout(() => {
      cardStyle = window.getComputedStyle(originalCards[0]);
      cardMarginRight = parseFloat(cardStyle.marginRight) || 0;
      cardWidth = originalCards[0].offsetWidth + cardMarginRight;
      if (cardWidth > 0) {
        updateCarouselPosition(false);
        startAutoPlay();
      } else {
        console.error(
          "Card width is still 0 after delay for carousel:",
          carouselId
        );
      }
    }, 100);
  }

  viewport.addEventListener("mouseenter", stopAutoPlay);
  viewport.addEventListener("mouseleave", startAutoPlay);

  // Optional: Recalculate on window resize
  window.addEventListener("resize", () => {
    if (originalCards.length > 0) {
      stopAutoPlay(); // Pause during resize
      cardStyle = window.getComputedStyle(originalCards[0]);
      cardMarginRight = parseFloat(cardStyle.marginRight) || 0;
      cardWidth = originalCards[0].offsetWidth + cardMarginRight;
      updateCarouselPosition(false); // Jump to current index with new width
      startAutoPlay(); // Resume after resize
    }
  });
}

document.addEventListener("DOMContentLoaded", function () {
  // Initialize the first carousel (Popular Packages)
  // Ensure these IDs and class name match your first carousel's HTML
  initializeCustomCarousel(
    "customPackageCarousel", // ID of the main carousel container
    "packageCarouselTrack", // ID of the track div
    "pkgPrevBtn", // ID of its prev button
    "pkgNextBtn", // ID of its next button
    "packages-carousel-item" // Class name of individual card items
  );

  // Initialize the second carousel (Basic Tests)
  initializeCustomCarousel(
    "customTestsCarousel", // ID of this carousel's main container
    "testsCarouselTrack", // ID of this carousel's track div
    "testPrevBtn", // ID of its prev button
    "testNextBtn", // ID of its next button
    "tests-carousel-item" // Class name of individual card items
  );
});
