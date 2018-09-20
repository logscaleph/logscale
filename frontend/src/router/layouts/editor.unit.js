import EditorLayout from './editor'

describe('@layouts/editor', () => {
  it('renders its content', () => {
    const slotContent = '<p>Hello!</p>'
    const { element } = shallowMount(EditorLayout, {
      slots: {
        default: slotContent,
      },
    })
    expect(element.innerHTML).toContain(slotContent)
  })
})
