import ErrorLayout from './error'

describe('@layouts/error', () => {
  it('renders its content', () => {
    const slotContent = '<p>Hello!</p>'
    const { element } = shallowMount(ErrorLayout, {
      slots: {
        default: slotContent,
      },
    })
    expect(element.innerHTML).toContain(slotContent)
  })
})
