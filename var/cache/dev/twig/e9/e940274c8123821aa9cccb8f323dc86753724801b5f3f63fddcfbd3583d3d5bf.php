<?php

/* piece/new.html.twig */
class __TwigTemplate_469ca3eefd6e67b3eb982984ce9c7b678491b1a347f7f4dcd85b5c680edaba04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "piece/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_193d1ef8ff5777cf9e04baba94c51f12f3e986ab51a3a400dd47b0b4a50fd3ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193d1ef8ff5777cf9e04baba94c51f12f3e986ab51a3a400dd47b0b4a50fd3ed->enter($__internal_193d1ef8ff5777cf9e04baba94c51f12f3e986ab51a3a400dd47b0b4a50fd3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/new.html.twig"));

        $__internal_ce074c8e7c1fe09615a55970c7627652b34cbc870601eb81cec057012624b9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce074c8e7c1fe09615a55970c7627652b34cbc870601eb81cec057012624b9dc->enter($__internal_ce074c8e7c1fe09615a55970c7627652b34cbc870601eb81cec057012624b9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "piece/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_193d1ef8ff5777cf9e04baba94c51f12f3e986ab51a3a400dd47b0b4a50fd3ed->leave($__internal_193d1ef8ff5777cf9e04baba94c51f12f3e986ab51a3a400dd47b0b4a50fd3ed_prof);

        
        $__internal_ce074c8e7c1fe09615a55970c7627652b34cbc870601eb81cec057012624b9dc->leave($__internal_ce074c8e7c1fe09615a55970c7627652b34cbc870601eb81cec057012624b9dc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_be40d64a3be27d4b64e2c96e7352bbc66d779402de0a98522d1cad8e585b9ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be40d64a3be27d4b64e2c96e7352bbc66d779402de0a98522d1cad8e585b9ec1->enter($__internal_be40d64a3be27d4b64e2c96e7352bbc66d779402de0a98522d1cad8e585b9ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4db3af3a7115631ad030239f28eeca62481c037f87c496f9453c57fa256f4503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db3af3a7115631ad030239f28eeca62481c037f87c496f9453c57fa256f4503->enter($__internal_4db3af3a7115631ad030239f28eeca62481c037f87c496f9453c57fa256f4503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Piece creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("piece_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_4db3af3a7115631ad030239f28eeca62481c037f87c496f9453c57fa256f4503->leave($__internal_4db3af3a7115631ad030239f28eeca62481c037f87c496f9453c57fa256f4503_prof);

        
        $__internal_be40d64a3be27d4b64e2c96e7352bbc66d779402de0a98522d1cad8e585b9ec1->leave($__internal_be40d64a3be27d4b64e2c96e7352bbc66d779402de0a98522d1cad8e585b9ec1_prof);

    }

    public function getTemplateName()
    {
        return "piece/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Piece creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('piece_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "piece/new.html.twig", "C:\\Users\\Admin\\Desktop\\OttoCar-BackEnd\\app\\Resources\\views\\piece\\new.html.twig");
    }
}
