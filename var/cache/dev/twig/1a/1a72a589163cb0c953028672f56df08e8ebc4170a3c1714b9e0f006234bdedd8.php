<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_24828bd1125ef69f12debff2bae7e8939b81b1fcafe0c42b4f612c42ac34bc26 extends Twig_Template
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
        $__internal_259f20a5fe9abdf88103130f1fa699a9f40e8bd4436776892719bed12c9f3744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259f20a5fe9abdf88103130f1fa699a9f40e8bd4436776892719bed12c9f3744->enter($__internal_259f20a5fe9abdf88103130f1fa699a9f40e8bd4436776892719bed12c9f3744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_276f599e55db5b75d6d5305e16e49e4caacef5dfa2db21c866c550c654f14375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276f599e55db5b75d6d5305e16e49e4caacef5dfa2db21c866c550c654f14375->enter($__internal_276f599e55db5b75d6d5305e16e49e4caacef5dfa2db21c866c550c654f14375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_259f20a5fe9abdf88103130f1fa699a9f40e8bd4436776892719bed12c9f3744->leave($__internal_259f20a5fe9abdf88103130f1fa699a9f40e8bd4436776892719bed12c9f3744_prof);

        
        $__internal_276f599e55db5b75d6d5305e16e49e4caacef5dfa2db21c866c550c654f14375->leave($__internal_276f599e55db5b75d6d5305e16e49e4caacef5dfa2db21c866c550c654f14375_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
