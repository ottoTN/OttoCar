<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_b29a7916d4051f577c8dfb1a1b946b5f3aa8ad5f3a76bb6ba76648df5bd56498 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b94e9664aad3a5eac5fef6af56c01f8b9ab1e5b0119af938b7e5c3c9e5ec68e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b94e9664aad3a5eac5fef6af56c01f8b9ab1e5b0119af938b7e5c3c9e5ec68e0->enter($__internal_b94e9664aad3a5eac5fef6af56c01f8b9ab1e5b0119af938b7e5c3c9e5ec68e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_d8fa3ef5f2492dfc4ded8b72ccec7c1c5a5f597ad1def50d708b791d1cb5bf61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8fa3ef5f2492dfc4ded8b72ccec7c1c5a5f597ad1def50d708b791d1cb5bf61->enter($__internal_d8fa3ef5f2492dfc4ded8b72ccec7c1c5a5f597ad1def50d708b791d1cb5bf61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_b94e9664aad3a5eac5fef6af56c01f8b9ab1e5b0119af938b7e5c3c9e5ec68e0->leave($__internal_b94e9664aad3a5eac5fef6af56c01f8b9ab1e5b0119af938b7e5c3c9e5ec68e0_prof);

        
        $__internal_d8fa3ef5f2492dfc4ded8b72ccec7c1c5a5f597ad1def50d708b791d1cb5bf61->leave($__internal_d8fa3ef5f2492dfc4ded8b72ccec7c1c5a5f597ad1def50d708b791d1cb5bf61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "D:\\Program Files (x86)\\EasyPHP-Devserver-16.1\\eds-www\\Garage\\Garage\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
