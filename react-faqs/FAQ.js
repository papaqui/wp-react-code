import React, { useState } from 'react';
// import './FAQ.css'; // .css file for styling

const FAQ = () => {
  const [activeIndex, setActiveIndex] = useState(null);

  const handleAccordionClick = (index) => {
    setActiveIndex(activeIndex === index ? null : index);
  };

  const faqData = [
    {
      question: 'Do you take reservations?',
      answer: 'Only from Monday til Thursday.',
    },
    {
      question: 'Is it pet friendly?',
      answer: 'Yes!',
    },
    // More FAQs can go here
  ];

  return (
    <div className="faq-container">
      {faqData.map((faq, index) => (
        <div
          key={index}
          className={`faq-item ${activeIndex === index ? 'active' : ''}`}
        >
          <div
            className="faq-question"
            onClick={() => handleAccordionClick(index)}
          >
            {faq.question}
          </div>
          {activeIndex === index && <div className="faq-answer">{faq.answer}</div>}
        </div>
      ))}
    </div>
  );
};

export default FAQ;
