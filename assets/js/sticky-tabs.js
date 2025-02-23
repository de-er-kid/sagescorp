document.addEventListener("DOMContentLoaded", () => {
  // Select the correct elements
  const navLinks = document.querySelectorAll(".nav-link[data-bs-toggle='tab']");
  const tabPanes = document.querySelectorAll(".tab-pane");
  const accordionButtons = document.querySelectorAll(".accordion-button");
  const accordionPanes = document.querySelectorAll(".accordion-collapse");
  const tabsContainer = document.querySelector(".tabs-section"); // Adjust selector to match your tab container
  let initialLoad = true; // Flag to prevent scrolling on initial load

  // Function to handle desktop tab switching
  function switchTab(targetId) {
    navLinks.forEach(link => {
      link.classList.remove("active");
      link.setAttribute("aria-selected", "false");
    });
    tabPanes.forEach(pane => {
      pane.classList.remove("show", "active");
    });

    const activeLink = document.querySelector(`[data-bs-target="${targetId}"]`);
    const activePane = document.querySelector(targetId);

    if (activeLink && activePane) {
      activeLink.classList.add("active");
      activeLink.setAttribute("aria-selected", "true");
      activePane.classList.add("show", "active");

      // Scroll to top of tabs section if in desktop view, but not on initial load
      if (!initialLoad && window.innerWidth >= 992 && tabsContainer) {
        tabsContainer.scrollIntoView({ behavior: "smooth" });
      }
    }
  }

  // Function to close all accordion items
  function closeAllAccordionItems() {
    accordionButtons.forEach(button => {
      button.classList.add("collapsed");
      button.setAttribute("aria-expanded", "false");
    });
    accordionPanes.forEach(pane => {
      pane.classList.remove("show");
    });
  }

  // Function to handle mobile accordion
  function handleAccordionClick(clickedButton) {
    const targetId = clickedButton.getAttribute("data-bs-target");
    const targetPane = document.querySelector(targetId);
    const isExpanded = clickedButton.getAttribute("aria-expanded") === "true";

    if (isExpanded) {
      // If the clicked item is already open, close it
      clickedButton.classList.add("collapsed");
      clickedButton.setAttribute("aria-expanded", "false");
      targetPane?.classList.remove("show");
    } else {
      // If the clicked item is closed, first close all items
      closeAllAccordionItems();
      // Then open the clicked item
      clickedButton.classList.remove("collapsed");
      clickedButton.setAttribute("aria-expanded", "true");
      targetPane?.classList.add("show");
    }
  }

  // Initialize desktop tabs
  navLinks.forEach(link => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      initialLoad = false; // Ensure scrolling happens after first interaction
      const targetId = link.getAttribute("data-bs-target");
      switchTab(targetId);
    });
  });

  // Initialize mobile accordion
  accordionButtons.forEach(button => {
    // Set initial state
    button.classList.add("collapsed");
    button.setAttribute("aria-expanded", "false");
    
    button.addEventListener("click", (e) => {
      e.preventDefault();
      handleAccordionClick(button);

      // Only scroll if we're opening the accordion
      if (button.getAttribute("aria-expanded") === "true" && window.innerWidth < 992) {
        const targetId = button.getAttribute("data-bs-target");
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          targetElement.scrollIntoView({ behavior: "smooth" });
        }
      }
    });
  });

  // Initialize first tab for desktop view without scrolling
  const firstTab = navLinks[0]?.getAttribute("data-bs-target");
  if (firstTab) {
    switchTab(firstTab);
  }
  initialLoad = false; // Set flag to false after initial setup

  // Initialize accordion for mobile - all closed by default
  closeAllAccordionItems();
});
